<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Repositories\Admin\MainRepository;
use App\Repositories\Admin\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MetaTag;
use App\Models\Admin\User;

class UserController extends AdminBaseController
{


    private $userRepository;


    public function __construct()
    {
        parent::__construct();
        $this->userRepository = app(UserRepository::class);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpage = 8;
        $countUsers = MainRepository::getCountUsers();
        $paginator = $this->userRepository->getAllUsers($perpage);

        MetaTag::setTags(['title' => 'Добавление категории']);
        return view('blog.admin.user.index',
            compact('countUsers','paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perpage = 10;
        $item = $this->userRepository->getEditId($id);
        if (empty($item)) {
            abort(404);
        }
        $orders = $this->userRepository->getUserOrders($id,$perpage);
        $role = $this->userRepository->getUserRole($id);
        $count = $this->userRepository->getCountOrdersPag($id);
        $count_orders = $this->userRepository->getCountOrders($id, $perpage);


        MetaTag::setTags(['title' => "Редактирование профиля пользователя № {$item->id}"]);

        return view('blog.admin.user.edit',
            compact('item','orders','role','count_orders','count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        СОЗДАТЬ СВОЙ РЕКВЕСТ И ДАЛЕЕ

        MetaTag::setTags(['title' => "Редактирование профиля пользователя № {$id}"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
