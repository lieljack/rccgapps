<?php namespace ElielBluejack\Fasting\Models;

use Model;

/**
 * Model
 */
class PrayerPoints extends Model
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
    public $table = 'elielbluejack_fasting_prayerpoints';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /* Relation */
    public $belongsTo = [
        'fasting_day' => 'ElielBluejack\Fasting\Models\FastingDays'
    ];
}
