<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scenes', function (Blueprint $table) {
            $table->text("id")->primary();
            $table->text("name");
            $table->date("startDate");
            $table->date("endDate")->nullable();
        });

        DB::table("scenes")->insert([
            [
                'id' => "isencao",
                'name' => "Inscrição com pedido de isenção",
                'startDate' => "2024-08-05",
                'endDate' => "2024-08-16"
            ],

            [
                'id' => "inscricao",
                'name' => "Inscrição sem pedido de isenção",
                'startDate' => "2024-09-16",
                'endDate' => "2024-10-13"
            ],

            [
                'id' => "provas",
                'name'=> "Provas",
                'startDate' => "2024-12-08",
                'endDate' => NULL
            ],

            [
                'id' => "notas",
                'name'=> "Extrato de notas",
                'startDate' => "2025-03-31",
                'endDate' => NULL
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scenes');
    }
};
