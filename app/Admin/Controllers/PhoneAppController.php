<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\PhoneApp;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class PhoneAppController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new PhoneApp(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name')->editable();
            $grid->column('package_name');
        
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
        return Show::make($id, new PhoneApp(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('package_name');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new PhoneApp(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('package_name');
        });
    }
}
