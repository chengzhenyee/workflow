<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoardList extends Model
{
    use HasFactory, HasUuid, SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'board_id', 'name', 'description',
    ];

    /** 
     * Get the board associated with the list.
     * 
     * @return BelongsTo  
     */
    public function board()
    {
        return $this->belongsTo(Board::class);
    }
}
