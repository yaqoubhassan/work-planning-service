<?php

namespace App\Models;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shift extends Model
{
    use HasFactory;

    protected $fillable = ['worker_id', 'start_time', 'end_time'];

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }
}
