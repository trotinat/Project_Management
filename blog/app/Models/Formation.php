<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    public function developpeurs()
{
    return $this->belongsToMany(Developer::class, 'Formation_Developer')
                ->withPivot('duration')
                ->withTimestamps();
}

}
