<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'team';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'team_id';
}
