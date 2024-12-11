<?php
// Ce fichier est maintenu par ESSARRAJ Fouad


namespace Modules\PkgBlog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Modules\PkgBlog\Models\Category;
use Modules\PkgBlog\Models\Tag;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content', 'category_id', 'user_id'];

    public function ()
    {
        return $this->belongsTo(::class, 'category_id', 'id');
    }
    public function ()
    {
        return $this->belongsTo(::class, 'user_id', 'id');
    }

    public function ()
    {
        return $this->belongsToMany(::class, 'articles_tags');
    }

    public function __toString()
    {
        return $this->id;
    }

}
