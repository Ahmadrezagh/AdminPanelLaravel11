<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'parent_id'
        ];

    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id', 'id');
    }


    public function getParentIdsAttribute()
    {
        $parent_ids = [];
        $current_category = $this;

        while ($current_category->parent){
            array_push($parent_ids, $current_category->parent_id);
            $current_category = $current_category->parent;
        }
        return $parent_ids;
    }

    public function isParentOfCategory(Category $category)
    {
        return (in_array($this->id, $category->parent_ids));
    }
}
