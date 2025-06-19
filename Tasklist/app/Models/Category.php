<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasUuids;
    protected $fillable=['category_title'];

    protected $primaryKey='id_category';
    public $incrementing=false;
    protected $KeyType='string';

    //Définir la relation entre les catégories et les tâches = une catégorie peut être liée à plusieurs tâches
    public function tasks(){
        return $this->hasMany(Task::class, 'id_category', 'id_category');
    }
}
