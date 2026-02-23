<?php namespace Pensoft\Networks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftNetworksData4 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_networks_data', function($table)
        {
            $table->string('ken_section_title')->nullable();
            $table->text('ken_section_description')->nullable();
            $table->string('ken_social_section_title')->nullable();
            $table->text('ken_social_section_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_networks_data', function($table)
        {
            $table->dropColumn('ken_section_title');
            $table->dropColumn('ken_section_description');
            $table->dropColumn('ken_social_section_title');
            $table->dropColumn('ken_social_section_description');
        });
    }
}
