<?php

    namespace App\Http\Controllers\Blog\Admin;

    use App\Models\User;
    use Auth;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Blog\BaseController as MainBaseController;

    /**
     * Class BaseController
     * @package App\Http\Controllers\Blog\Admin
     */
    abstract class BaseController extends MainBaseController
    {

        public function __construct()
        {

        }

    }
