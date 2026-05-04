<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('media', function (Blueprint $table) {
            $table->string('link_facebook', 255)->nullable()->change();
        });

        Schema::table('testimoni', function (Blueprint $table) {
            $table->string('nama', 255)->change();
            $table->string('tahun_alumni', 255)->change();
        });

        Schema::table('fasilitas_sekolah', function (Blueprint $table) {
            $table->string('nama', 255)->change();
        });

        Schema::table('fasilitas_asrama', function (Blueprint $table) {
            $table->string('nama', 255)->change();
        });

        Schema::table('kegiatan_asrama', function (Blueprint $table) {
            $table->string('nama', 255)->change();
        });

        Schema::table('pimpinan', function (Blueprint $table) {
            $table->string('nama', 255)->change();
        });

        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->string('nama', 255)->change();
        });

        Schema::table('tenaga_kependidikan', function (Blueprint $table) {
            $table->string('nama', 255)->change();
        });

        Schema::table('studi_lanjut', function (Blueprint $table) {
            $table->string('nama_alumni', 255)->change();
            $table->string('angkatan', 50)->change();
        });

        Schema::table('profesional', function (Blueprint $table) {
            $table->string('nama', 255)->change();
            $table->string('angkatan', 50)->nullable()->change();
            $table->string('link_facebook', 255)->nullable()->change();
            $table->string('link_twitter', 255)->nullable()->change();
            $table->string('link_linkedin', 255)->nullable()->change();
        });

        Schema::table('ekstrakurikuler', function (Blueprint $table) {
            $table->string('nama', 255)->change();
        });

        Schema::table('pengasuhs', function (Blueprint $table) {
            $table->string('nama', 255)->change();
        });
    }

    public function down(): void
    {
        Schema::table('media', function (Blueprint $table) {
            $table->string('link_facebook', 50)->nullable()->change();
        });

        Schema::table('testimoni', function (Blueprint $table) {
            $table->string('nama', 50)->change();
            $table->string('tahun_alumni', 50)->change();
        });

        Schema::table('fasilitas_sekolah', function (Blueprint $table) {
            $table->string('nama', 50)->change();
        });

        Schema::table('fasilitas_asrama', function (Blueprint $table) {
            $table->string('nama', 50)->change();
        });

        Schema::table('kegiatan_asrama', function (Blueprint $table) {
            $table->string('nama', 50)->change();
        });

        Schema::table('pimpinan', function (Blueprint $table) {
            $table->string('nama', 50)->change();
        });

        Schema::table('tenaga_pendidik', function (Blueprint $table) {
            $table->string('nama', 50)->change();
        });

        Schema::table('tenaga_kependidikan', function (Blueprint $table) {
            $table->string('nama', 50)->change();
        });

        Schema::table('studi_lanjut', function (Blueprint $table) {
            $table->string('nama_alumni', 50)->change();
            $table->string('angkatan', 10)->change();
        });

        Schema::table('profesional', function (Blueprint $table) {
            $table->string('nama', 50)->change();
            $table->string('angkatan', 20)->nullable()->change();
            $table->string('link_facebook', 50)->nullable()->change();
            $table->string('link_twitter', 50)->nullable()->change();
            $table->string('link_linkedin', 50)->nullable()->change();
        });

        Schema::table('ekstrakurikuler', function (Blueprint $table) {
            $table->string('nama', 100)->change();
        });

        Schema::table('pengasuhs', function (Blueprint $table) {
            $table->string('nama', 50)->change();
        });
    }
};
