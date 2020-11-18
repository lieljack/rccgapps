<?php namespace ElielBluejack\Fasting\Models;

use Model;

/**
 * Model
 */
class FastingDays extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'elielbluejack_fasting_days';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /* Relation */

    public function prayer_points() {
        return $this->hasMany(PrayerPoints::class);
    }

    // public $hasMany = [
    //     'prayer_points' => ['ElielBluejack\Fasting\Models\PrayerPoints', 'key' => 'id', 'otherKey' => 'fasting_day_id']
    // ];
}
