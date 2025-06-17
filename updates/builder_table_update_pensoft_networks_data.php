<?php namespace Pensoft\Networks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftNetworksData extends Migration
{
    public function up()
    {
        Schema::table('pensoft_networks_data', function($table)
        {
            $table->integer('news_category_id');
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_networks_data', function($table)
        {
            $table->dropColumn('news_category_id');
        });
    }
}
