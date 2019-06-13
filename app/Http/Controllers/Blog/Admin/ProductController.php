<?php

    namespace App\Http\Controllers\Blog\Admin;

    use App\Http\Requests\AdminProductsCreateRequest;
    use App\Models\Admin\Category;
    use App\Models\Admin\Product;
    use App\Repositories\Admin\ProductRepository;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use MetaTag;

    class ProductController extends AdminBaseController
    {


        private $productRepository;


        public function __construct()
        {
            parent::__construct();
            $this->productRepository = app(ProductRepository::class);
        }

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $perpage = 10;
            $getAllProducts = $this->productRepository->getAllProducts($perpage);
            $count = $this->productRepository->getCountProducts();


            MetaTag::setTags(['title' => 'Список товаров']);
            return view('blog.admin.product.index', compact('getAllProducts','count'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {

            $_SESSION['ckfinder_auth'] = true;

            $item = new Category();

            MetaTag::setTags(['title' => 'Создание нового товара']);

            return view('blog.admin.product.create',[
                'categories' => Category::with('children')->where('parent_id', '0')
                    ->get(),
                'delimiter' => '-',
                'item' => $item,
            ]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param AdminProductsCreateRequest $request
         * @return \Illuminate\Http\RedirectResponse
         */
        public function store(AdminProductsCreateRequest $request)
        {

            $data = $request->input();

            $product = (new Product())->create($data);

            $product->status =  $request->status ? '1' : '0';
            $product->hit =  $request->hit ? '1' : '0';
            $product->category_id = $request->parent_id ?? '0';

            $save = $product->save();
            $id = $product->id;


            $this->productRepository->editFilter($id, $data);



            if ($save){
                return redirect()
                    ->route('blog.admin.products.create',[$product->id])
                    ->with(['success' => 'Успешно сохранено']);
            } else {
                return back()
                    ->withErrors(['msg'=>'Ошибка сохранения'])
                    ->withInput();
            }



        }

        /**
         * Display the specified resource.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }
    }
