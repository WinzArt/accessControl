<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function deviceToVisitor()
    {
        return $this->belongsToMany(Visitor::class)->withTimestamps();
    }
}
