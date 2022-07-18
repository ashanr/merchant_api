<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Permission extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'gurad_name',
        'description'

    ];

    protected $table = 'permissions';


}
