<?php

namespace Submtd\LaravelUuid;

use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid()
    {
        self::creating(function ($model) {
            $model->{$model->getKeyName()} = (string)Str::uuid();
        });
    }
}
