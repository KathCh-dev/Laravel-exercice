<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Task extends Model
{
        use HasUuids;
    protected $fillable=['task_title', 'id_category'/*foreign*/, 'done'];

    protected $primaryKey='id_task';
    public $incrementing=false;
    protected $KeyType='string';

    public function category(){
        
        //définir la relation entre les catégories et les tâches: une tâche peut être liée à une seule catégorie
        return $this->belongsTo(Category::class, 'id_category'/*foreign*/, 'id_category');
    }
    

}
