<?php

use App\Models\ReportCode;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('support_id')->nullable();
            $table->foreignIdFor(ReportCode::class)->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->integer('price')->default(0);
            $table->integer('tax');
            $table->date('expired_date')->nullable();
            $table->string('thumbnail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
