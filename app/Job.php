<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
    	'user_id', 'title', 'description', 'salary', 'location', 'apply'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

}
