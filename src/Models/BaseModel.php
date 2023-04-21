<?php

namespace Bikaraan\BZones\Models;

use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BaseModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel query()
 * @mixin \Eloquent
 */
class BaseModel extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;

    protected $prefix = 'bzones_';

    public function __construct()
    {
        parent::__construct();

        $this->prefix = config('admin.extensions.bzones.config.db-prefix', 'bzones_');
        $this->table = $this->prefix . $this->getTable();
    }
}
