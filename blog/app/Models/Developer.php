<?php

namespace App;

class Developer extends User
{
    public function formations()
    {
        return $this->belongsToMany(Formation::class, 'Formation_Developer')
                    ->withPivot('duration')
                    ->withTimestamps();
    }
}
