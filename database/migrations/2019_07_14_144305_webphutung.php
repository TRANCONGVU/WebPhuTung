<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Webphutung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Users
        Schema::create('role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
        });

        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',191);
            $table->string('phone',191);
            $table->string('email',191)->unique();
            $table->string('password',191);
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('level')->unsigned();
            $table
                ->foreign('level')
                ->references('id')
                ->on('role');
            $table->timestamps();
        });
//News
        Schema::create('cate_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->text('summary');
            $table->text('content');
            $table->string('image');
            $table->bigInteger('price');
            $table->bigInteger('cate_id')->unsigned();
            $table->foreign('cate_id')->references('id')->on('cate_news')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('tag_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('news_id')->unsigned();
            $table
                ->foreign('news_id')
                ->references('id')
                ->on('news')
                ->onDelete('cascade');
            $table->integer('searchs');
        });

//        Chính sách hoạt động
        Schema::create('cate_active_policy',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });
        Schema::create('active_policy',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->text('summary');
            $table->string('image');
            $table->bigInteger('cate_id')->unsigned();
            $table
                ->foreign('cate_id')
                ->references('id')
                ->on('cate_active_policy')
                ->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('tag_active_policy',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('active_policy_id')->unsigned();
            $table
                ->foreign('active_policy_id')
                ->references('id')
                ->on('active_policy')
                ->onDelete('cascade');
            $table->integer('searchs');
        });

//        Chính sách thành viên
        Schema::create('cate_member_policy',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });
        Schema::create('member_policy',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->text('summary');
            $table->string('image');
            $table->bigInteger('cate_id')->unsigned();
            $table
                ->foreign('cate_id')
                ->references('id')
                ->on('cate_member_policy')
                ->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('tag_member_policy',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('member_policy_id')->unsigned();
            $table
                ->foreign('member_policy_id')
                ->references('id')
                ->on('member_policy')
                ->onDelete('cascade');
            $table->integer('searchs');
        });
//         Hỏi đáp
        Schema::create('Questions',function (Blueprint $table)
        {
            $table->string('phone')->nullable();
            $table->string('email',191)->unique();
            $table->text('content');
            $table->integer('status');
            $table->bigInteger('user_id')->unsigned();
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('admins')
                ->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
