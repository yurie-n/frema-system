<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;   // SoftDeletesを使用する。
//use Illuminate\Support\Str; // Strを使用する(uuidを生成するために使用する。)

class ItemImage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'item_id',
        'file_name',
    ];
    // protected $dates = [
    //     'deleted_at',
    // ];
    // protected $hidden = [
    //     'id',
    //     'deleted_at',
    // ];
    // protected $casts = [
    //     'uuid' => 'string',
    //     'name' => 'string',
    //     'path' => 'string',
    //     'size' => 'integer',
    //     'm_image_path' => 'string',
    //     'm_image_size' => 'integer',
    //     'thumbnail_path' => 'string',
    //     'thumbnail_size' => 'integer',
    // ];
    // protected static function boot()
    // {
    //     parent::boot();
    //     static::creating(function ($model) {
    //         // モデルが作成される前に、UUIDを生成して割り当てます。
    //         if (empty($model->uuid)) {
    //             $model->uuid = Str::uuid();
    //         }
    //     });
    // }
}
