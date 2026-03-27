<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // service_categories
        Schema::table('service_categories', function (Blueprint $table) {
            $table->string('name_ar')->nullable()->after('name');
        });

        // services
        Schema::table('services', function (Blueprint $table) {
            $table->string('title_ar')->nullable()->after('title');
            $table->text('description_ar')->nullable()->after('description');
            $table->longText('content_ar')->nullable()->after('content');
        });

        // slider_slides
        Schema::table('slider_slides', function (Blueprint $table) {
            $table->string('title_ar')->nullable()->after('title');
            $table->string('subtitle_ar')->nullable()->after('subtitle');
            $table->text('description_ar')->nullable()->after('description');
            $table->string('button_text_ar')->nullable()->after('button_text');
        });

        // about_tabs
        Schema::table('about_tabs', function (Blueprint $table) {
            $table->string('title_ar')->nullable()->after('title');
            $table->string('subtitle_ar')->nullable()->after('subtitle');
            $table->text('description_ar')->nullable()->after('description');
            $table->string('button_text_ar')->nullable()->after('button_text');
        });

        // products
        Schema::table('products', function (Blueprint $table) {
            $table->string('name_ar')->nullable()->after('name');
            $table->longText('content_ar')->nullable()->after('content');
        });

        // about_pages
        Schema::table('about_pages', function (Blueprint $table) {
            $table->string('title_ar')->nullable()->after('title');
            $table->longText('content_ar')->nullable()->after('content');
        });

        // about_histories
        Schema::table('about_histories', function (Blueprint $table) {
            $table->string('title_ar')->nullable()->after('title');
            $table->text('description_ar')->nullable()->after('description');
        });

        // team_members
        Schema::table('team_members', function (Blueprint $table) {
            $table->string('position_ar')->nullable()->after('position');
            $table->text('description_ar')->nullable()->after('description');
        });

        // testimonials
        Schema::table('testimonials', function (Blueprint $table) {
            $table->string('position_ar')->nullable()->after('position');
            $table->text('description_ar')->nullable()->after('description');
        });

        // counters
        Schema::table('counters', function (Blueprint $table) {
            $table->string('label_ar')->nullable()->after('label');
        });
    }

    public function down(): void
    {
        Schema::table('service_categories', function (Blueprint $table) {
            $table->dropColumn(['name_ar']);
        });

        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['title_ar', 'description_ar', 'content_ar']);
        });

        Schema::table('slider_slides', function (Blueprint $table) {
            $table->dropColumn(['title_ar', 'subtitle_ar', 'description_ar', 'button_text_ar']);
        });

        Schema::table('about_tabs', function (Blueprint $table) {
            $table->dropColumn(['title_ar', 'subtitle_ar', 'description_ar', 'button_text_ar']);
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['name_ar', 'content_ar']);
        });

        Schema::table('about_pages', function (Blueprint $table) {
            $table->dropColumn(['title_ar', 'content_ar']);
        });

        Schema::table('about_histories', function (Blueprint $table) {
            $table->dropColumn(['title_ar', 'description_ar']);
        });

        Schema::table('team_members', function (Blueprint $table) {
            $table->dropColumn(['position_ar', 'description_ar']);
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropColumn(['position_ar', 'description_ar']);
        });

        Schema::table('counters', function (Blueprint $table) {
            $table->dropColumn(['label_ar']);
        });
    }
};
