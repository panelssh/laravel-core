<?php

namespace PanelSsh\Core\Traits;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_ext
 * @mixin Model
 */
trait HasNanoid
{
    protected static function bootHasNanoid()
    {
        static::creating(function ($model) {
            $model->id_ext = nanoid();
        });
    }
}
