<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'length', 'width', 'height', 'no_of_components','project_id', 'iron_weight'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}
