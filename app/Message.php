<?php

namespace App;

use App\Lecto\MessageColor;
use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    protected $fillable = [ 'message', 'color_id' ];

    /**
     * Get the user that owns the message.
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the message color as App\Lecto\MessageColor
     * @return MessageColor
     */
    public function getColor(): MessageColor {
        return MessageColor::of($this->color_id);
    }

}

