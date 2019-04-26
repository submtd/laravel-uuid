<?php

namespace Submtd\LaravelUuid;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

trait HasUuid
{
    public static function bootHasUuid()
    {
        self::creating(function ($model) {
            $model->$uuid = (string)Str::uuid();
        });
    }

    public function scopeUuid(Builder $builder, string $uuid)
    {
        return $builder->where('uuid', $uuid)->first();
    }

    // public function uuidField()
    // {
    //     return $this->uuidField ?? config('laravel-uuid.defaultUuidField', 'uuid');
    // }
}
