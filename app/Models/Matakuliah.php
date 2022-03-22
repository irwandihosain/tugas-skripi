<?php

namespace App\Models;

use App\Models\Dosen;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matakuliah extends Model
{
    use HasFactory;

    protected $guarded = [''];

    // protected $primaryKey = 'uuid';

    // protected $keyType = 'string';

    // public $increamenting = false;

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($model) {
    //         if (empty($model->{$model->getKeyName()})) {
    //             $model->{$model->getKeyName()} = Str::uuid();
    //         }
    //     });
    // }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}
