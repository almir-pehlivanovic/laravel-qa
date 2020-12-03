<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Question extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'views',
        'answers',
        'votes',
        'best_answer_id',
        'user_id',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
