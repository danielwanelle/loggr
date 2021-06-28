<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryLog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'log_id',
    ];

    /**
     * Category relation
     */
    public function category()
    {
        # code...
    }

    /**
     * Log relation
     */
    public function log()
    {
        # code...
    }
}
