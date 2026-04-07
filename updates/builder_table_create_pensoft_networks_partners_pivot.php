<?php namespace Pensoft\Networks\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePensoftNetworksPartnersPivot extends Migration
{
    public function up(): void
    {
        Schema::create('pensoft_networks_partners_pivot', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('partner_id');
            $table->integer('network_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pensoft_networks_partners_pivot');
    }
}