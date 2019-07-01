<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 09.06.2019
     * Time: 4:17
     */

    namespace App\Repositories\Admin;

    use App\Models\Admin\Product as Model;
    use App\Repositories\CoreRepository;
    use App\SBlog\Core\BlogApp;
    use Illuminate\Support\Facades\Session;


    class ProductRepository extends CoreRepository
    {

        public function __construct()
        {
            parent::__construct();
        }

        /**
         * @return mixed
         */
        protected function getModelClass()
        {
            return Model::class;
        }

        /** Get Info for One Product by Id */
        public function getInfoProduct($id)
        {
            $product = $this->startConditions()
                ->find($id);
            return $product;
        }

        /** Get Filters One Product*/
        public function getFiltersProduct($id)
        {
            $filter = \DB::table('attribute_products')
                ->select('attr_id')
                ->where('product_id', $id)
                ->pluck('attr_id')
                ->all();
            return $filter;
        }

        /** Get Related Products One Product*/
        public function getRelatedProducts($id)
        {
            $related_products = $this->startConditions()
                ->join('related_products','products.id','=','related_products.related_id')
                ->select('products.title','related_products.related_id')
                ->where('related_products.product_id',$id)
                ->get();
            return $related_products;
        }

        /** Get Gallery for One Product*/
        public function getGallery($id)
        {
            $gallery = \DB::table('galleries')
                ->where('product_id',$id)
                ->pluck('img')
                ->all();
            return $gallery;

        }

        /** INDEX PAGE */
        public function getAllProducts($perpage)
        {
            $get_all = $this->startConditions()::withTrashed()
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->select('products.*', 'categories.title AS cat')
                ->orderBy(\DB::raw('LENGTH(products.title)', "products.title"))
                ->limit($perpage)
                ->paginate($perpage);

            return $get_all;
        }

        /** Count products */
        public function getCountProducts()
        {
            $count = $this->startConditions()
                ->count();
            return $count;
        }

        /** Last products */
        public function getLastProducts($perpage)
        {
            $get = $this->startConditions()
                ->orderBy('id', 'desc')
                ->limit($perpage)
                ->paginate($perpage);
            return $get;
        }

        /** Edit filters */
        public function editFilter($id, $data)
        {
            $filter = \DB::table('attribute_products')
                ->where('product_id', $id)
                ->pluck('attr_id')
                ->toArray();


            /** если убрал фильтры */
            if (empty($data['attrs']) && !empty($filter)) {
                \DB::table('attribute_products')
                    ->where('product_id', $id)
                    ->delete();
                return;
            }

            /** если добавил фильтры */
            if (empty($filter) && !empty($data['attrs'])) {
                $sql_part = '';
                foreach ($data['attrs'] as $v) {
                    $sql_part .= "($v, $id),";
                }

                $sql_part = rtrim($sql_part, ',');

                \DB::insert("insert into attribute_products (attr_id, product_id) VALUES $sql_part");

                return;
            }

            /** если поменял фильтры */
            if (!empty($data['attrs'])) {
                $result = array_diff($filter, $data['attrs']);
                if ($result) {
                    \DB::table('attribute_products')
                        ->where('product_id', $id)
                        ->delete();
                    $sql_part = '';
                    foreach ($data['attrs'] as $v) {
                        $sql_part .= "($v, $id),";
                    }
                    $sql_part = rtrim($sql_part, ',');

                    \DB::insert("insert into attribute_products (attr_id, product_id) VALUES $sql_part");
                }
            }

        }


        /** Edit Related Product */
        public function editRelatedProduct($id, $data)
        {
            $related_product = \DB::table('related_products')
                ->select('related_id')
                ->where('product_id', $id)
                ->pluck('related_id')
                ->toArray();

            /** Если убрал связанные товары */
            if (empty($data['related']) && !empty($related_product)) {
                \DB::table('related_products')
                    ->where('product_id', $id)
                    ->delete();
                return;
            }

            /** Если добавил связанные товары */
            if (empty($related_product) && !empty($data['related'])) {
                $sql_part = '';

                foreach ($data['related'] as $v) {
                    $v = (int)$v;
                    $sql_part .= "($id, $v),";
                }
                $sql_part = rtrim($sql_part, ',');


                \DB::insert("insert into related_products (product_id, related_id) VALUES $sql_part");
                return;
            }

            /** Если поменял связанные товары */
            if (!empty($data['related'])) {

                $result = array_diff($related_product, $data['related']);
                if (!(empty($result)) || count($related_product) != count($data['related'])) {
                    \DB::table('related_products')
                        ->where('product_id', $id)
                        ->delete();
                    $sql_part = '';
                    foreach ($data['related'] as $v) {
                        $sql_part .= "($id, $v),";
                    }
                    $sql_part = rtrim($sql_part, ',');
                    \DB::insert("insert into related_products (product_id, related_id) VALUES $sql_part");
                }
            }

        }




        /**  Upload Gallery Images */
        public function uploadGallery($name, $wmax, $hmax)
        {
            $uploaddir = 'uploads/gallery/';
            $ext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES[$name]['name']));
            $new_name = md5(time()) . ".$ext";
            $uploadfile = $uploaddir . $new_name;
            \Session::push('gallery', $new_name);
            if (@move_uploaded_file($_FILES[$name]['tmp_name'], $uploadfile)) {
                self::resize($uploadfile, $uploadfile, $wmax, $hmax, $ext);
                $res = array("file" => $new_name);
                echo json_encode($res);
            }
        }


        /**  Upload Single Image*/
        public function uploadImg($name, $wmax, $hmax)
        {
            $uploaddir = 'uploads/single/';
            $ext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $name));
            $uploadfile = $uploaddir . $name;
            \Session::put('single', $name);
            self::resize($uploadfile, $uploadfile, $wmax, $hmax, $ext);

        }


        /** Get Image for Create New Product */
        public function getImg()
        {
            if (!empty(\Session::get('single'))) {
                $name = \Session::get('single');
                \Session::forget('single');
                return $name;
            }
        }

        /** Save Gallery Images
         * @param $id
         */
        public function saveGallery($id)
        {
            if (!empty(\Session::get('gallery'))) {
                $sql_part = '';
                foreach (\Session::get('gallery') as $v) {
                    $sql_part .= "('$v', $id),";
                }
                $sql_part = rtrim($sql_part, ',');
                \DB::insert("insert into galleries (img, product_id) VALUES $sql_part");
                \Session::forget('gallery');
            }
        }



        /**  Resize Images for My needs */
        public static function resize($target, $dest, $wmax, $hmax, $ext)
        {
            list($w_orig, $h_orig) = getimagesize($target);
            $ratio = $w_orig / $h_orig;

            if (($wmax / $hmax) > $ratio) {
                $wmax = $hmax * $ratio;
            } else {
                $hmax = $wmax / $ratio;
            }

            $img = "";
            // imagecreatefromjpeg | imagecreatefromgif | imagecreatefrompng
            switch ($ext) {
                case("gif"):
                    $img = imagecreatefromgif($target);
                    break;
                case("png"):
                    $img = imagecreatefrompng($target);
                    break;
                default:
                    $img = imagecreatefromjpeg($target);
            }
            $newImg = imagecreatetruecolor($wmax, $hmax);
            if ($ext == "png") {
                imagesavealpha($newImg, true);
                $transPng = imagecolorallocatealpha($newImg, 0, 0, 0, 127);
                imagefill($newImg, 0, 0, $transPng);
            }
            imagecopyresampled($newImg, $img, 0, 0, 0, 0, $wmax, $hmax, $w_orig,
                $h_orig); // копируем и ресайзим изображение
            switch ($ext) {
                case("gif"):
                    imagegif($newImg, $dest);
                    break;
                case("png"):
                    imagepng($newImg, $dest);
                    break;
                default:
                    imagejpeg($newImg, $dest);
            }
            imagedestroy($newImg);
        }




    }
