<?php

    namespace App\Http\Controllers\Blog;

    use Auth;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

    abstract class BaseController extends Controller
    {

        public function isAjax() {
            return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
        }


    }
