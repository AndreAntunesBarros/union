<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('resources', function (Blueprint $table) {

            $table->unsignedBigInteger('tabela_id')->after('id')->nullable(); 


            $table->foreign('tabela_id')
            ->references('id')
            ->on('tabelas')->onDelete('SET NULL'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('resources', function (Blueprint $table) {
            $table->dropForeign('resources_tabela_id_foreign');
            $table->dropColumn('tabela_id');
        });
        Schema::dropIfExists('tabelas');
    }
};
