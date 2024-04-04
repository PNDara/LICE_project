<?php

namespace App\Admin\Controllers;

use \App\Models\Books;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class BooksController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Books';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Books());

        $grid->column('id', __('Id'));
        $grid->column('Title', __('Title'));
        $grid->column('Year', __('Year'));
        $grid->column('Cover', __('Cover'));
        $grid->column('Description', __('Description'));
        $grid->column('File', __('File'));
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
        $show = new Show(Books::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Title', __('Title'));
        $show->field('Year', __('Year'));
        $show->field('Cover', __('Cover'));
        $show->field('Description', __('Description'));
        $show->field('File', __('File'));
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
        $form = new Form(new Books());

        $form->text('Title', __('Title'));
        $form->text('Year', __('Year'));
        $form->image('Cover', __('Cover'));
        $form->text('Description', __('Description'));
        $form->file('File', __('File'));

        return $form;
    }
}
