<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasApiTokens, SoftDeletes;

    /**
     * Instancing table of database
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * The primary key of table
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "is_synchronized",
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // 
    ];

    /**
     * Instancing dates of the table
     *
     * @var array
     */
    protected $dates = [
        'clicked_at',
        'synchronized_at',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
