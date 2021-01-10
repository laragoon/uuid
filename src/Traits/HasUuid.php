<?php

namespace Laragoon\Uuid\Traits;

use Illuminate\Support\Str;

trait HasUuid
{
    /**
     * Generate and fill uuid field when a model
     * is created in with the eloquent ORM
     */
    protected static function bootHasUuid()
    {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }
}
