<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $fillable = ['slug', 'name',];

    public function skills() { return $this->belongsToMany(Skill::class); }

}
