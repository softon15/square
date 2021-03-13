<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Post extends Model
{
    use HasFactory;
    use Sortable;

    protected $fillable = ['title', 'text'];

    public $sortable = ['title', 'created_at'];

    /**
     * Get the phone associated with the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
