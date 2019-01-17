<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CDS extends Model
{
    protected $fillable = ['title' , 'release' ,'cover' ,'idGenre'];
}
