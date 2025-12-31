<?php namespace san\San\Models;

use Model;

/**
 * Model
 */
class Booking extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'san_san_booking';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function export($columns, $sessionKey = null)
    {
        $bookings = Booking::all();
       
        $bookings->each(function($booking) use ($columns) {
          //  $booking->addVisible($columns);
        });
//pprint_r($bookings->toArray());
        return $bookings->toArray();
    }
}
