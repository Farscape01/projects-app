<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Get the keywords in a project.
     */
    public function keywords()
    {
        return $this->hasMany('App\Keyword');
    }
}
