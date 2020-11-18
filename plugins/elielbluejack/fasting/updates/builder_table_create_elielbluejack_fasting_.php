<?php namespace ElielBluejack\Fasting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateElielbluejackFasting extends Migration
{
    public function up()
    {
        Schema::create('elielbluejack_fasting_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->smallInteger('day_number');
            $table->date('date');
            $table->string('topic', 255);
            $table->string('text', 255);
            $table->text('introduction');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('elielbluejack_fasting_');
    }
}
