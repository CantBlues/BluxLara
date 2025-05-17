<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\ContentPrinciple;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ContentPrincipleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new ContentPrinciple(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('principle');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new ContentPrinciple(), function (Show $show) {
            $show->field('id');
            $show->field('principle');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new ContentPrinciple(), function (Form $form) {
            $form->display('id');
            $form->textarea('principle');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
