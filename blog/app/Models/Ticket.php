<?php

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * Les attributs modifiables du modèle.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status'
    ];

   /*Relation*/
    public function Project()
    {
        return $this->belongsTo(Project::class);
    }
    public function Sprint()
    {
        return $this->belongsTo(Sprint::class);
    }
    public function Developer()
    {
        return $this->belongsTo(Developer::class);
    }
}