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
        Schema::table('users', function (Blueprint $table) {
            // Penambahan kolom
            $table->string('username', 100);
            $table->string('address', 1000);
            $table->string('phoneNumber', 100);
            $table->date('birthdate')->nullable();

            // Modifikasi kolom
            $table->renameColumn('name', 'fullname');
            $table->string('email')->nullable()->change();
            // Ramadhan abdul aziz 6706223026 d3if-46-04
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
