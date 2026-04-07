<?php namespace Pensoft\Networks\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePensoftNetworksData extends Migration
{
    public function up(): void
    {
        Schema::create('pensoft_networks_data', function(Blueprint $table)
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

    public function down(): void
    {
        Schema::dropIfExists('pensoft_networks_data');
    }
}