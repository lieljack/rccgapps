<?php namespace ElielBluejack\Fasting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElielbluejackFastingDays extends Migration
{
    public function up()
    {
        Schema::rename('elielbluejack_fasting_', 'elielbluejack_fasting_days');
        Schema::table('elielbluejack_fasting_days', function($table)
        {
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::rename('elielbluejack_fasting_days', 'elielbluejack_fasting_');
        Schema::table('elielbluejack_fasting_', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
