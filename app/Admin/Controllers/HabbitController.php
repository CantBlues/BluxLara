<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Habbit;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class HabbitController extends AdminController {
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid() {
        return Grid::make(new Habbit(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('img')->image();
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
    protected function detail($id) {
        return Show::make($id, new Habbit(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('img');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form() {
        return Form::make(new Habbit(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->image('img')->saveFullUrl();

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
