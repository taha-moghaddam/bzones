<?php

namespace Bikaraan\BZones\Http\Controllers;

use Bikaraan\BCore\Form;
use Bikaraan\BCore\Grid;
use Bikaraan\BCore\Show;
use Bikaraan\BZones\Models\Zone;

class ZonesController extends BaseAdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Zones';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Zone());

        $grid->column('id', __('bzones::titles.Id'));
        $grid->column('name', __('bzones::titles.Name'));
        $grid->column('created_at', __('bzones::titles.Created at'));
        $grid->column('updated_at', __('bzones::titles.Updated at'));

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
        $show = new Show(Zone::findOrFail($id));

        $show->field('id', __('bzones::titles.Id'));
        $show->field('name', __('bzones::titles.Name'));
        $show->field('created_at', __('bzones::titles.Created at'));
        $show->field('updated_at', __('bzones::titles.Updated at'));
        $show->field('deleted_at', __('bzones::titles.Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Zone());

        $form->text('name', __('bzones::titles.Name'))->required();

        return $form;
    }
}
