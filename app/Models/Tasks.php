<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tasks extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'description', 'status', 'due_date'];

    protected $dates = ['deleted_at'];

    public function getNextTasks()
    {
        return $this->nextTasks()->get();
    }
    public function scopeNextTasks($query)
    {
        return $query->where('due_date', '>=', now())
            ->orderBy('due_date', 'asc');
    }
}
