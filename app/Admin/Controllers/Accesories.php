<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Accesoriess;

class Accesories extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Accesoriess';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Accesoriess());

        $grid->column('id', __('Id'));
        $grid->column('serv_name', __('Serv name'));
        $grid->column('serv_desc', __('Serv desc'));
        $grid->column('img')->image();
        $grid->column('qty', __('Qty'));
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
        $show = new Show(Accesoriess::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('serv_name', __('Serv name'));
        $show->field('serv_desc', __('Serv desc'));
        $show->field('img', __('Img'));
        $show->field('qty', __('Qty'));
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
        $form = new Form(new Accesoriess());

        $form->text('serv_name', __('Serv name'));
        $form->text('serv_desc', __('Serv desc'));
        $form->image('img', __('Img'));
        $form->number('qty', __('Qty'));

        return $form;
    }
}
