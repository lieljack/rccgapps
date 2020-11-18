<?php namespace ElielBluejack\Fasting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateElielbluejackFastingPrayerpoints extends Migration
{
    public function up()
    {
        Schema::create('elielbluejack_fasting_prayerpoints', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->smallInteger('prayer_number');
            $table->text('prayerpoint');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('elielbluejack_fasting_prayerpoints');
    }
}
