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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->text("nome");
            $table->text("turno");
            $table->text("campus");
        });

        DB::table("cursos")->insert([
            [
                'nome' => "Administração",
                'turno' => "Matutino",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Administração",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Administração",
                'turno' => "Noturno",
                'campus' => "Brasília de Minas"
            ],

            [
                'nome' => "Agronomia",
                'turno' => "Integral",
                'campus' => "Janaúba"
            ],

            [
                'nome' => "Artes Visuais",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Ciências Biológicas - Bacharelado",
                'turno' => "Diurno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Ciências Biológicas - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Ciências Contábeis",
                'turno' => "Matutino",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Ciências Contábeis",
                'turno' => "Noturno",
                'campus' => "Salinas"
            ],

            [
                'nome' => "Ciências da Religião",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Ciências Econômicas",
                'turno' => "Matutino",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Ciências Econômicas",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Ciências Sociais",
                'turno' => "Matutino",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Ciências Sociais",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Direito",
                'turno' => "Matutino",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Direito",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Educação Física - Bacharelado",
                'turno' => "Diurno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Educação Física - Licenciatura",
                'turno' => "Diurno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Educação Física - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Educação Física - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Januária"
            ],

            [
                'nome' => "Enfermagem",
                'turno' => "Diurno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Engenharia Civil",
                'turno' => "Integral",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Engenharia de Sistemas",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Engenharia Florestal",
                'turno' => "Integral",
                'campus' => "Janaúba"
            ],

            [
                'nome' => "Farmácia",
                'turno' => "Integral",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Filosofia",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Física - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Geografia - Bacharelado",
                'turno' => "Matutino",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Geografia - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Geografia - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Januária"
            ],

            [
                'nome' => "História - Licenciatura",
                'turno' => "Matutino",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "História - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "História - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Januária"
            ],

            [
                'nome' => "Letras Espanhol",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Letras Inglês",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Letras Inglês",
                'turno' => "Vespertino",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Letras Inglês",
                'turno' => "Noturno",
                'campus' => "Januária"
            ],

            [
                'nome' => "Letras Português",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Letras Português",
                'turno' => "Vespertino",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Letras Português",
                'turno' => "Noturno",
                'campus' => "Januária"
            ],

            [
                'nome' => "Letras Português",
                'turno' => "Noturno",
                'campus' => "Paracatu"
            ],

            [
                'nome' => "Matemática - Licenciatura",
                'turno' => "Diurno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Matemática - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Matemática - Licenciatura",
                'turno' => "Noturno",
                'campus' => "São Francisco"
            ],

            [
                'nome' => "Medicina",
                'turno' => "Integral",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Medicina Veterinária",
                'turno' => "Integral",
                'campus' => "Janaúba"
            ],

            [
                'nome' => "Música - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Odontologia",
                'turno' => "Integral",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Pedagogia - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Almenara"
            ],

            [
                'nome' => "Pedagogia - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Brasília de Minas"
            ],

            [
                'nome' => "Pedagogia - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Janaúba"
            ],

            [
                'nome' => "Pedagogia - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Pedagogia - Licenciatura",
                'turno' => "Vespertino",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Pedagogia - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Januária"
            ],

            [
                'nome' => "Pedagogia - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Paracatu"
            ],

            [
                'nome' => "Pedagogia - Licenciatura",
                'turno' => "Noturno",
                'campus' => "Pirapora"
            ],

            [
                'nome' => "Psicologia",
                'turno' => "Integral",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Serviço Social",
                'turno' => "Matutino",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Serviço Social",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Sistema de Informação",
                'turno' => "Diurno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Teatro",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Tecnologia em Gestão do Agronegócio",
                'turno' => "Noturno",
                'campus' => "Janaúba"
            ],

            [
                'nome' => "Tecnologia em Gestão Pública",
                'turno' => "Noturno",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Tecnologia em Gestão Pública",
                'turno' => "Vespertino",
                'campus' => "Montes Claros"
            ],

            [
                'nome' => "Zootecnia",
                'turno' => "Integral",
                'campus' => "Janaúba"
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
