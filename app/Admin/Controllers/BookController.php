<?php

namespace App\Admin\Controllers;

use \App\Models\book;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class BookController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'book';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new book());

        $grid->column('id', __('Id'));
        $grid->column('First name', __('First name'));
        $grid->column('last name', __('Last name'));
        $grid->column('gender', __('Gender'));
        $grid->column('image', __('Image'));
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
        $show = new Show(book::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('First name', __('First name'));
        $show->field('last name', __('Last name'));
        $show->field('gender', __('Gender'));
        $show->field('image', __('Image'));
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
        $form = new Form(new book());

        $form->text('First name', __('First name'));
        $form->text('last name', __('Last name'));
        $form->text('gender', __('Gender'));
        $form->image('image', __('Image'));

        return $form;
    }
}