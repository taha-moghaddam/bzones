<?php

namespace Bikaraan\BZones\Http\Controllers;

use Encore\Admin\Controllers\AdminController;
use Illuminate\Support\Facades\Lang;

class BaseAdminController extends AdminController
{
    /**
     * Get content title.
     *
     * @return string
     */
    protected function title()
    {
        return Lang::hasForLocale('bzones::titles.' . $this->title) ?
            __('bzones::titles.' . $this->title) :
            $this->title;
    }
}
