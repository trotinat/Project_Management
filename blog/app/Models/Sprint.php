<?php
use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    /**
     * Les attributs modifiables du modèle.
     *
     * @var array
     */
    protected $fillable = [
        'numero', 'status','date_deb','date_fin',
    ];

    public function Project()
    {
        return $this->belongsTo(Project::class);
}
}