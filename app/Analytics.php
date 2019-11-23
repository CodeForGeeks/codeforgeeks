<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analytics extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'analytics';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'analytics_id';
}
