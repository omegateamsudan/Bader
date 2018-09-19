<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    const STOP = '0';
    const IN_PROGRESS = '1';
    const DONE = '2';

    protected $fillable = [
        'user_id',
        'subject',
        'organization',
        'status',
        'next_step',
        'value',
        'comment',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


}
