<?php namespace ElielBluejack\Fasting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElielbluejackFastingPrayerpoints extends Migration
{
    public function up()
    {
        Schema::table('elielbluejack_fasting_prayerpoints', function($table)
        {
            $table->integer('fastingday_id');
        });
    }
    
    public function down()
    {
        Schema::table('elielbluejack_fasting_prayerpoints', function($table)
        {
            $table->dropColumn('fastingday_id');
        });
    }
}
