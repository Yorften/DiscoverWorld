<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if ($filters['date'] ?? false) {
            switch ($filters['date']) {
                case 'latest':
                    $query->latest();
                    break;
                case 'oldest':
                    $query->oldest();
                    break;
                default:
                    abort('404');
                    break;
            }
        }
        if ($filters['destination'] ?? false) {
            $query->where('destination_id', $filters['destination']);
        }
    }
}
