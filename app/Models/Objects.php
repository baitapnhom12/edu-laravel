<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Objects extends Model
{
    public $timestamps = false;

    protected $fillable = ['name_object'];

    protected $table = 'object';

    protected $primaryKey = 'id_object';

    public function post(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
