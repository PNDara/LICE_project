<?php

namespace App\Admin\Controllers;

use \App\Models\Workday;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class WorkdayController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Workday';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Workday());

        $grid->column('id', __('Id'));
        $grid->column('Day', __('Day'));
        $grid->column('Open', __('Open'));
        $grid->column('Cloe', __('Cloe'));
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
        $show = new Show(Workday::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Day', __('Day'));
        $show->field('Open', __('Open'));
        $show->field('Cloe', __('Cloe'));
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
        $form = new Form(new Workday());

        $form->text('Day', __('Day'));
        $form->time('Open', __('Open'))->default(date('H:i:s'));
        $form->time('Cloe', __('Cloe'))->default(date('H:i:s'));

        return $form;
    }
}
