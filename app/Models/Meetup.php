<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meetup extends Model
{
    use Searchable;
    use HasFactory;

    protected $fillable = ['name', 'location', 'date', 'time', 'image', 'description', 'user_id'];

    // public function scopeFilter($query, array $filters) {
    //     if($filters['search'] ?? false) {
    //         $query->where('name', 'like', '%' . request('search') . '%')
    //             ->orWhere('location', 'like', '%' . request('search') . '%')
    //             ->orWhere('description', 'like', '%' . request('search') . '%');
    //     }
    // }

    public function toSearchableArray() {
        return [
            'name' => $this->name,
            'location' => $this->location,
            'description' => $this->description
        ];
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
