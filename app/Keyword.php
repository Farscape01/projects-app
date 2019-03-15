<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    /**
     * Get the project associated with the keyword.
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
