<?php

namespace PanelSsh\Core\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property bool $is_active
 * @method static $this|Builder active()
 * @method static $this|Builder inactive()
 * @mixin Model
 */
trait HasStatus
{
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function scopeInactive(Builder $query): Builder
    {
        return $query->where('is_active', false);
    }

    public function markStatusAsActive()
    {
        return $this->forceFill(['is_active' => true])->save();
    }

    public function markStatusAsInactive()
    {
        return $this->forceFill(['is_active' => false])->save();
    }
}
