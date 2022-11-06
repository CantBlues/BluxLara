<?php

namespace App\Admin\Controllers;

use App\Models\Node;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class NodeController extends AdminController {
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid() {
        return Grid::make(new Node(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('addr');
            $grid->column('port');
            $grid->column('uid');
            $grid->column('net');
            $grid->column('type');
            $grid->column('host');
            $grid->column('tls');
            $grid->column('protocol');
            $grid->column('aid');
            $grid->column('path');
            $grid->column('ping');
            $grid->column('delay');
            $grid->column('speed');
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
        return Show::make($id, new Node(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('addr');
            $show->field('port');
            $show->field('uid');
            $show->field('net');
            $show->field('type');
            $show->field('host');
            $show->field('tls');
            $show->field('protocol');
            $show->field('aid');
            $show->field('path');
            $show->field('ping');
            $show->field('delay');
            $show->field('speed');
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
        return Form::make(new Node(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('addr');
            $form->text('port');
            $form->text('uid');
            $form->text('net');
            $form->text('type');
            $form->text('host');
            $form->text('tls');
            $form->text('protocol');
            $form->text('aid');
            $form->text('path');
            $form->text('ping');
            $form->text('delay');
            $form->text('speed');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
