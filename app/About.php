<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'additionaldata';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'additionaldata_id';

}
