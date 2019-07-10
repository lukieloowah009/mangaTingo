<?php

namespace App\Models;

use App\Helpers\uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class MangaType extends Model
{
    use uuid;
    use SoftDeletes;
    public $incrementing = false;
    protected $fillable = ['name'];

    /**
     * @return HasMany
     */
    public function mangas()
    {
      return $this->hasMany(Manga::class, 'manga_type_id');
    }
}
