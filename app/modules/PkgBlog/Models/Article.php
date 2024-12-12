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

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function Tag()
    {
        return $this->belongsToMany(Tag::class, 'articles_tags');
    }

    public function __toString()
    {
        return $this->id;
    }

}
