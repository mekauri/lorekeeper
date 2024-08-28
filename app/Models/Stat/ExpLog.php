<?php

namespace App\Models\Stat;

use App\Models\Model;
use App\Models\Character\Character;
use App\Models\User\User;

class ExpLog extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sender_id', 'recipient_id',
        'log', 'quantity', 'log_type', 'data',
        'sender_type', 'recipient_type',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'exp_log';

    /**
     * Whether the model contains timestamps to be saved and updated.
     *
     * @var string
     */
    public $timestamps = true;

    /**********************************************************************************************

        RELATIONS

    **********************************************************************************************/

    /**
     * Get the user who initiated the logged action.
     */
    public function sender() {
        if ($this->sender_type == 'User') {
            return $this->belongsTo(User::class, 'sender_id');
        }

        return $this->belongsTo(Character::class, 'sender_id');
    }

    /**
     * Get the user who received the logged action.
     */
    public function recipient() {
        if ($this->recipient_type == 'User') {
            return $this->belongsTo(User::class, 'recipient_id');
        }

        return $this->belongsTo(Character::class, 'recipient_id');
    }
}
