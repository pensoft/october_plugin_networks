<?php namespace Pensoft\Networks\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftNetworksData3 extends Migration
{
    public function up(): void
    {
        Schema::table('pensoft_networks_data', function(Blueprint $table)
        {
            $table->text('about2')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pensoft_networks_data', function(Blueprint $table)
        {
            $table->dropColumn('about2');
        });
    }
}