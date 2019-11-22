<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'technology';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'technology_id';
}
