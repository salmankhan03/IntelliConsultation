<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Upload extends Model
{
    //    use HasFactory;
    protected $table = 'uploads';
    protected $fillable =['link'];
}
