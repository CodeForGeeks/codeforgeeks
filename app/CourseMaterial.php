<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseMaterial extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'course_material';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'course_material_id';
    public function course()
    {
        return $this->belongsTo('App\Courses', "course_id");
    }

}
