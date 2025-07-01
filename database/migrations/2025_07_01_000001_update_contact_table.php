<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('ip_address')->nullable()->after('mensagem');
            $table->text('user_agent')->nullable()->after('ip_address');

            // Verificar e adicionar updated_at se não existir
            if (!Schema::hasColumn('contacts', 'updated_at')) {
                $table->timestamp('updated_at')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn(['ip_address', 'user_agent', 'updated_at']);
        });
    }
};
