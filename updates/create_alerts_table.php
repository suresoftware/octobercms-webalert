<?php namespace SureSoftware\WebAlert\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAlertsTable extends Migration
{
    public function up()
    {
        Schema::create('suresoftware_webalert_alerts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('message');
            $table->text('type');
            $table->timestamp('finish')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('suresoftware_webalert_alerts');
    }
}
