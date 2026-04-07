<?php namespace Pensoft\Networks\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftNetworksData4 extends Migration
{
    public function up(): void
    {
        Schema::table('pensoft_networks_data', function(Blueprint $table)
        {
            $table->string('ken_section_title')->nullable();
            $table->text('ken_section_description')->nullable();
            $table->string('ken_social_section_title')->nullable();
            $table->text('ken_social_section_description')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pensoft_networks_data', function(Blueprint $table)
        {
            $table->dropColumn('ken_section_title');
            $table->dropColumn('ken_section_description');
            $table->dropColumn('ken_social_section_title');
            $table->dropColumn('ken_social_section_description');
        });
    }
}