<?php

namespace App;
use App\CdArchives;
use Illuminate\Database\Eloquent\Model;

class CdArchives extends Model
{
    protected $fillable = ['title' , 'description', 'release' ,'cover' ,'idGenre'];
}
