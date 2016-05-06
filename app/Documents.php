<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $table = 'documents';
    protected $fillable = ['title', 'type', 'description', 'path'];
}
