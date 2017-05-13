<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = ['hash', 'content', 'type'];

    protected $table = 'api';
}
