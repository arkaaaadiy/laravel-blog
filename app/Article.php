<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Article extends Model
{

    //mass assigned
    protected $fillable = ['title', 'slug', 'description_short', 'description', 'image', 'image_show', 'meta_title', 'meta_description', 'meta_keyword', 'published', 'created_by', 'modified_by'];

    //mitators
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }
    // Polymorphic relation with categories

    public function categories()
    {
        return $this->morphToMany('App\Category', 'categoryable');
    }

    public function scopeLastArticles($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }

    public function downloads()
    {
        return $this->morphToMany(Download::class, 'downloadable');
    }
}
