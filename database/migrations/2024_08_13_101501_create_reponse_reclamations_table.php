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
        Schema::create('reponse_reclamations', function (Blueprint $table) {
            $table->id();
            $table->integer('sender_no');
            $table->string('reponse');
            $table->integer('agence');
            $table->string('adresse_ip');
            $table->integer('id_champs');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reponse_reclamations');
    }
};
