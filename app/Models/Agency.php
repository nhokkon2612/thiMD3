<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class,'manager_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class,'status_id');
    }
}
