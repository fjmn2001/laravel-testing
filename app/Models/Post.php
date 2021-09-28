<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function setNameAttribute($value): void
    {
        $this->attributes['name'] = strtolower($value);
    }

    public function getSlugAttribute(): string
    {
        return str_replace(' ', '-', $this->name);
    }

    public function href(): string
    {
        return "blog/{$this->slug}";
    }
}
