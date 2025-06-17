<?php namespace Pensoft\Networks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftNetworksData2 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_networks_data', function($table)
        {
            $table->text('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_networks_data', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
