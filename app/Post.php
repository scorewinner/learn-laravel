<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
    public function comments() {
        return$this->hasMany(Comment::class);
    }

    public function user() {
        return$this->belongsTo(User::class);
    }

    public function addComment($body){

        $this->comments()->create(['user_id'=>auth()->id(), 'body'=> $body]);
    }
    public function scopeFilter($query, $filters) {
        if (isset($filters['month'])){
            if($month = $filters['month']) {
                $query->whereMonth('created_at', Carbon::parse($month)->month);
            }
        }
        if (isset($filters['year'])){
            if($year = $filters['year']){
                $query->whereYear('created_at', $year);
            }
        }
    }
}
