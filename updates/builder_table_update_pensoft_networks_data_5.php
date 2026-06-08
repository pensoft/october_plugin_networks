<?php namespace Pensoft\Networks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftNetworksData5 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_networks_data', function($table)
        {
            $table->text('about3')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pensoft_networks_data', function($table)
        {
            $table->dropColumn('about3');
        });
    }
}
