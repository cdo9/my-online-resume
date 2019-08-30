<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model {

    protected $fillable = ['slug', 'name', 'color', 'parent_id'];

    public function childs() {
        return $this->hasMany(Skill::class, 'parent_id', 'id');
    }

}
