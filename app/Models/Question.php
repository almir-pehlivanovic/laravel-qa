<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Support\Str;

class Question extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'views',
        'answers_count',
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

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function getUrlAttribute()
    {
        return route('questions.show', $this->slug);
    }

    public function getBodyLimitAttribute()
    {
        $truncated = Str::limit($this->body, 300);

        return $truncated;
    }

    public function getTitleLimitAttribute()
    {
        $truncated = Str::limit($this->title, 50);

        return $truncated;
    }

    public function getDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getStatusAnswersAttribute()
    {
        $answered  = "text-red-400";
        $noAnswers = "text-gray-400";
        $answeredAccepted   = "border bg-green-500 border-green-500 text-white";

        if($this->answers_count > 0 )
        {
            if($this->best_answer_id)
            {
                return $answeredAccepted;
            }
            return  $answered;
        }

        return $noAnswers;
    }

    public function getStatusVotesAttribute()
    {
        $votes  = "text-green-400";
        $noVotes = "text-gray-400";
    
        if($this->votes > 0 )
        {
            return  $votes;
        }

        return $noVotes;
    }


    public function getStatusViewsAttribute()
    {
        $views  = "text-indigo-400";
        $noViews = "text-gray-400";

        if($this->views > 0 )
        {
            return  $views;
        }

        return $noViews;
    }



    public function getVotesStringAttribute()
    {
        return Str::plural('vote', $this->votes);
    }

    public function getAnswersStringAttribute()
    {
        return Str::plural('answer', $this->answers_count);
    }
    
    public function getViewsStringAttribute()
    {
        return Str::plural('view', $this->views);
    }

}
