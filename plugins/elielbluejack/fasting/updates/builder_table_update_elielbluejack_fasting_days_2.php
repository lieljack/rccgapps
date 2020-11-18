<?php namespace ElielBluejack\Fasting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElielbluejackFastingDays2 extends Migration
{
    public function up()
    {
        Schema::table('elielbluejack_fasting_days', function($table)
        {
            $table->boolean('avaliable')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('elielbluejack_fasting_days', function($table)
        {
            $table->dropColumn('avaliable');
        });
    }
}
