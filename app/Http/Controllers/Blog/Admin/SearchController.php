<?php

    namespace App\Http\Controllers\Blog\Admin;

    use App\Models\Admin\Currency;
    use App\Models\Admin\Product;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use MetaTag;

    class SearchController extends AdminBaseController
    {

        public function __construct()
        {
            parent::__construct();

        }


        public function index(Request $request)
        {
            $query = !empty(trim($request->search)) ? trim($request->search) : null;

            $products = \DB::table('products')
                    ->where('title','LIKE', '%' .$query. '%')
                    ->get()
                    ->all();


            $currency = \DB::table('currencies')
                    ->where('base','=', '1')
                    ->first();


            MetaTag::setTags(['title' => 'Результаты поиска']);
            return view('blog.admin.search.result',compact('query','products','currency'));
        }


        public function search(Request $request)
        {
            $search = $request->get('term');

            $result = \DB::table('products')
                ->select('title')
                ->where('title','LIKE', '%'. $search. '%')
                ->pluck('title');


            return response()->json($result);

        }




    }
