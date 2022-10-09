<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoardListCard extends Model
{
    use HasFactory, HasUuid, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'board_list_id', 'title', 'description',
    ];

    /** 
     * Get the board list associated with the card.
     * 
     * @return BelongsTo  
     */
    public function boardList()
    {
        return $this->belongsTo(BoardList::class);
    }
}
