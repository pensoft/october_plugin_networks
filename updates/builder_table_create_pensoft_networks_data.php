<?php namespace Pensoft\Networks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePensoftNetworksData extends Migration
{
    public function up()
    {
        Schema::create('pensoft_networks_data', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('sort_order')->default(1);
            $table->text('about')->nullable();
            $table->string('title');
            $table->string('get_in_touch_url')->nullable();
            $table->text('knowege_requests')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pensoft_networks_data');
    }
}
