<?php


namespace App\Helpers;


trait uuid
{
    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->{$model->getKeyName()} =  \Webpatser\Uuid\Uuid::generate()->string;
        });
    }
}
