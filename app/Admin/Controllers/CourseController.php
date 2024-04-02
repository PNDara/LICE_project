<?php

namespace App\Admin\Controllers;

use \App\Models\Course;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class CourseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Course';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Course());

        $grid->column('id', __('Id'));
        $grid->column('Cover', __('Cover'));
        $grid->column('Title', __('Title'));
        $grid->column('Description', __('Description'));
        $grid->column('Date', __('Date'));
        $grid->column('Duration', __('Duration'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Course::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Cover', __('Cover'));
        $show->field('Title', __('Title'));
        $show->field('Description', __('Description'));
        $show->field('Date', __('Date'));
        $show->field('Duration', __('Duration'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Course());

        $form->image('Cover', __('Cover'));
        $form->text('Title', __('Title'));
        $form->text('Description', __('Description'));
        $form->datetime('Date', __('Date'))->default(date('Y-m-d H:i:s'));
        $form->text('Duration', __('Duration'));

        return $form;
    }
}
