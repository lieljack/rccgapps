<?php namespace ElielBluejack\Fasting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElielbluejackFastingPrayerpoints3 extends Migration
{
    public function up()
    {
        Schema::table('elielbluejack_fasting_prayerpoints', function($table)
        {
            $table->renameColumn('fasting_day_id', 'fasting_days_id');
        });
    }
    
    public function down()
    {
        Schema::table('elielbluejack_fasting_prayerpoints', function($table)
        {
            $table->renameColumn('fasting_days_id', 'fasting_day_id');
        });
    }
}
