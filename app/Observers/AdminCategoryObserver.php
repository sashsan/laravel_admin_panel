<?php

namespace App\Observers;

use App\Models\Admin\Category;

class AdminCategoryObserver
{



    public function creating(Category $category)
    {
        $this->setAlias($category);
    }

    public function created(Category $category)
    {
        //
    }





    public function updating(Category $category)
    {
            $this->setAlias($category);
    }

    public function updated(Category $category)
    {

    }


    /**
     * Handle the category "deleted" event.
     *
     * @param  \App\Models\Admin\Category  $category
     * @return void
     */
    public function deleted(Category $category)
    {
        //
    }

    /**
     * Handle the category "restored" event.
     *
     * @param  \App\Models\Admin\Category  $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the category "force deleted" event.
     *
     * @param  \App\Models\Admin\Category  $category
     * @return void
     */
    public function forceDeleted(Category $category)
    {
        //
    }


    public function setAlias(Category $category)
    {
        if (empty($category->alias)){
                $category->alias = \Str::slug($category->title) . rand(10,999);
        }
    }

    public function setPublishedAt()
    {

    }


}
