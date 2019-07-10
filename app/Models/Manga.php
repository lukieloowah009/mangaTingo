<?php

namespace App\Models;

use App\Helpers\uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manga extends Model
{
    use uuid;
    use SoftDeletes;
    public $incrementing = false;
    protected $fillable = ['name', 'year', 'status', 'description', 'manga_type_id', 'author_id'];

    /**
     * @return BelongsTo
     */
    public function mangaType()
    {
        return $this->belongsTo(MangaType::class, 'manga_type_id');
    }

    /**
     * @return BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
