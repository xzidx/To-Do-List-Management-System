<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Task extends Model
{
    
    protected $table = 'tasks';

    protected $fillable = [
        'title', 
        'status', 
        'time_spent', 
        'assignees', 
        'date',
        'duration',
        'description',
    ];
    
    protected $casts = [
        'date' => 'date',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
