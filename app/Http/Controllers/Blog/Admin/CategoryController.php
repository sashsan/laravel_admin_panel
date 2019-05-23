<?php

namespace App\Http\Controllers\Blog\Admin;


use App\Http\Requests\BlogCategoryUpdateRequest;
use App\Models\BlogCategory;
use App\Repositories\BlogCategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


/**
 *  Управление категориями блога
 * Class CategoryController
 * @package App\Http\Controllers\Blog\Admin
 */
class CategoryController extends BaseController
{
    /**
     * @var BlogCategoryRepository
     */
    private $blogCategoryRepository;

    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->blogCategoryRepository = app(BlogCategoryRepository::class);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$paginator = BlogCategory::paginate(5);
        $paginator = $this->blogCategoryRepository->getAllWithPaginate(20);
        return view('blog.admin.categories',compact('paginator'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new BlogCategory();

        $categoryList = $this->blogCategoryRepository->getForComboBox();

        return view('blog.admin.category.create', compact('item','categoryList'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCategoryUpdateRequest $request)
    {
        $data = $request->input();

        if (empty($data['slug'])){
            $data['slug'] = Str::slug($data['title']);
        }

        $item = new BlogCategory($data);

        $item->save();

        if ($item){
            return redirect()->route('blog.admin.categories.create', [$item->id])
                ->with(['success'=>'Успешно сохранено']);
        } else {
            //->withInput(); -чтобы введенные данные сохранились в форме
            return back()->withErrors(['msg'=>'Ошибка сохранения'])
                ->withInput();
        }

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
     * @param  int $id
     * @param BlogCategoryRepository $categoryRepository
     * @return \Illuminate\Http\Response
     */
    public function edit($id,BlogCategoryRepository $categoryRepository)
    {
        //получаю инфу по id
        // $item = $categoryRepository->getEdit($id); было
        $item = $this->blogCategoryRepository->getEdit($id);
        if(empty($item)){
            abort(404);
        }
        $categoryList = $this->blogCategoryRepository->getForComboBox();

        return view('blog.admin.category.edit', compact('item','categoryList'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function update(BlogCategoryUpdateRequest $request, $id)
    {

        $item = $this->blogCategoryRepository->getEdit($id);
        if (empty($item)){
            return back()
                ->withErrors(['msg'=> "Запись id = [{$id}] не найдена"])
                ->withInput();
        }

        $data = $request->all();
        //это из store
        if (empty($data['slug'])){
            $data['slug'] = Str::slug($data['title']);
        }
        //---

        $result = $item
            ->fill($data)
            ->save();
        //вместо  $result = $item->fill($data)->save(); можно  $result = $item->update($data);
        if ($result){
            return redirect()
                ->route('blog.admin.categories.edit', $item->id)
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg'=>'Ошибка сохранения'])
                ->withInput();
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
