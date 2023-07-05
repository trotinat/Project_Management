<?php
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Les attributs modifiables du modèle.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'is_active'
    ];

    /**
     * Obtient le chef de projet du projet.
     */
    public function ProjectManagaer()
    {
        return $this->belongsTo(ProjectManagaer::class);
    }
    public function tickets()
    {
        return $this->hasMany(Tickets::class);
    }
}