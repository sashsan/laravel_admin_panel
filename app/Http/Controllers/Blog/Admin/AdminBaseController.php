<?php

    namespace App\Http\Controllers\Blog\Admin;

    use App\Models\User;
    use Auth;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Blog\BaseController as MainBaseController;
    use MetaTag;


    /**
     * Class AdminBaseController
     * @package App\Http\Controllers\Blog\Admin
     */
    abstract class AdminBaseController extends MainBaseController
    {


        public function __construct()
        {
            $this->middleware('auth');
            $this->middleware('status');

            MetaTag::setTags([
                'title' => 'Админ панель',
                'description' => 'Описание',
                'keywords' => 'keywords',
            ]);

        }





    }
