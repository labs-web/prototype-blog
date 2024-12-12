<?php
// Ce fichier est maintenu par ESSARRAJ Fouad


namespace Modules\PkgBlog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];



    public function __toString()
    {
        return $this->name;
    }

}
