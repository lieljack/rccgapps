<?php namespace ElielBluejack\Fasting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElielbluejackFastingPrayerpoints2 extends Migration
{
    public function up()
    {
        Schema::table('elielbluejack_fasting_prayerpoints', function($table)
        {
            $table->renameColumn('fastingday_id', 'fasting_day_id');
        });
    }
    
    public function down()
    {
        Schema::table('elielbluejack_fasting_prayerpoints', function($table)
        {
            $table->renameColumn('fasting_day_id', 'fastingday_id');
        });
    }
}
