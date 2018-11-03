<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model{
    protected $fillable = ['project_name','line_action','objective','summary','start_date','end_date'];
}
