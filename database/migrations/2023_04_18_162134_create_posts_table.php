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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->datetime('dibuat');
            $table->text('asalKota');
            $table->enum('agama',['Islam', 'Kristen', 'Budha', 'katolik', 'Hindu', 'Konghucu']);
            $table->enum('filmKesukaanMarvel', ['Avengers: Endgame 2019',
            'Black Panther 2018',
            'Captain America: The Winter Soldier 2014',
            'Iron Man 2008',
            'The Avengers 2012',
            'Spider-Man: Into the Spider-Verse 2018',
            'Thor: Ragnarok 2017',
            'Guardians of the Galaxy 2014',
            'X-Men: Days of Future Past 2014',
            'Deadpool 2016',
            'Captain America: Civil War 2016',
            'Logan 2017',
            'Doctor Strange 2016',
            'The Dark Knight 2008',
            'Avengers: Infinity War 2018',
            'Spider-Man: No Way Home 2021',
            'Thor: The Dark World 2013',
            'Ant-Man 2015',
            'Captain Marvel 2019',
            'Guardians of the Galaxy Vol. 2 2017']);
            $table->enum('status', ['Belum Kawin', 'Kawin', 'Cerai']);
            $table->text('pekerjaan');
            $table->text('warnaKesukaan');
            // $table->string("title", 100);
            // $table->text("expert");
            // $table->text("content");
            // $table->string("image");
            // $table->foreignId("author_id")->constrained("users");
            $table->string('kondisiJiwaRaga');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
