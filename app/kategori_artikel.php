<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_artikel extends Model
{
    //
    protected $table="kategori_artikel";

    protected $fillable=['user_id','nama'];
}
