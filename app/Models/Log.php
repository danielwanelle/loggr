<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'application',
        'registry',
    ];

    /**
     * Application relation
     */
    public function application()
    {
        # code...
    }

    /**
     * Categories relation
     */
    public function categories()
    {
        # code...
    }
}
