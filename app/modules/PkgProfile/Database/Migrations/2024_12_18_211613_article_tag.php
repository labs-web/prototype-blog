<?php
// Ce fichier est maintenu par ESSARRAJ Fouad



namespace Modules\PkgProfile\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('article_tag', function (Blueprint $table) {


            $table->foreignId('tag_id')->constrained('tags');
            $table->foreignId('article_id')->constrained('articles');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_tag');
    }
};
