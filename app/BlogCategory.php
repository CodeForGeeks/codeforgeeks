<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_category';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'blog_category_id';
}
