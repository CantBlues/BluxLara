<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\JudgeRule;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class JudgeRuleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new JudgeRule(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('content');
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
        return Show::make($id, new JudgeRule(), function (Show $show) {
            $show->field('id');
            $show->field('content');
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
        return Form::make(new JudgeRule(), function (Form $form) {
            $form->display('id');
            $form->textarea('content');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
