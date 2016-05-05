<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $table = 'document';
    protected $fillable = ['title', 'type', 'description'];
}
