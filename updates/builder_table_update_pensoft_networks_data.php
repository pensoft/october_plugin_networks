<?php namespace Pensoft\Networks\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftNetworksData extends Migration
{
    public function up(): void
    {
        Schema::table('pensoft_networks_data', function(Blueprint $table)
        {
            $table->integer('news_category_id');
        });
    }

    public function down(): void
    {
        Schema::table('pensoft_networks_data', function(Blueprint $table)
        {
            $table->dropColumn('news_category_id');
        });
    }
}