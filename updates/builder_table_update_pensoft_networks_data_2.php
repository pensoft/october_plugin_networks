<?php namespace Pensoft\Networks\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftNetworksData2 extends Migration
{
    public function up(): void
    {
        Schema::table('pensoft_networks_data', function(Blueprint $table)
        {
            $table->text('slug')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pensoft_networks_data', function(Blueprint $table)
        {
            $table->dropColumn('slug');
        });
    }
}