<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $fillable = ['slug', 'name', 'freelance', 'started_at', 'ended_at',];
    protected $dates = ['created_at', 'updated_at', 'started_at', 'ended_at',];

    public function skills() { return $this->belongsToMany(Skill::class); }

}
