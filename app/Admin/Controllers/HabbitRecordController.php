<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\HabbitRecord;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class HabbitRecordController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new HabbitRecord(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('habbit_id');
            $grid->column('weight');
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
        return Show::make($id, new HabbitRecord(), function (Show $show) {
            $show->field('id');
            $show->field('habbit_id');
            $show->field('weight');
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
        return Form::make(new HabbitRecord(), function (Form $form) {
            $form->display('id');
            $form->text('habbit_id');
            $form->text('weight');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
