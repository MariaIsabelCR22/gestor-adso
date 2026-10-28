
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('aprendices', function (Blueprint $table) {
            $table->string('nombre', 120);
            $table->string('documento', 40)->unique();
            $table->string('correo', 120)->unique();
            $table->unsignedBigInteger('ficha_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('aprendices', function (Blueprint $table) {
            $table->dropUnique(['documento']);
            $table->dropUnique(['correo']);
            $table->dropColumn([
                'nombre',
                'documento',
                'correo',
                'ficha_id',
            ]);
        });
    }
};
