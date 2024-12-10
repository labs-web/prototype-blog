<?php
// Ce fichier est maintenu par ESSARRAJ Fouad



namespace Modules\PkgBlog\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles_tags', function (Blueprint $table) {


            $table->foreignId('article_id')->constrained('articles');
            $table->foreignId('tag_id')->constrained('tags');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles_tags');
    }
};
