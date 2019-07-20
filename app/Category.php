<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\str;

class Category extends Model
{
    //mass assigned
    protected $guarded = [];

    //mutators
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'),'-');
    }

    //get Children category
    public function children(){
        return $this->hasMany(self::class, 'parent_id');
    }
    // Polymorphic relation with articles

    public function articles()
    {
        return $this->morphedbyMany('App\Article', 'categoryable');
    }

    public function scopeLastCategories($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
