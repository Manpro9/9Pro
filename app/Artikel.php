<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable = ['title', 'description', 'image', 'type', 'content', 'status'];

    public function comments() {
    	return $this->hasMany('App\Comments');
    }
}
