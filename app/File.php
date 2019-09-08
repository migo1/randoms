<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;


class File extends Model
{
    protected $table = 'files';

    public $incrementing = false;

    protected $fillable = [
       'name','file_code'
    ];


    public static function boot()
{
    parent::boot();
    self::creating(function ($model) {
        $model->file_code = Uuid::generate()->string;
    });
}

public function getRouteKeyName()
{
  return 'file_code';
}
    
}
