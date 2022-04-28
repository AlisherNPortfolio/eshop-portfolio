<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('full_name')->nullable();
            $table->string('username', 30);
            $table->string('profile_image')->nullable();
            $table->string('phone', 13)->comment('+998959998855');
            $table->foreignId('region_id')
                ->nullable()
                ->constrained('regions')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('district_id')
                ->nullable()
                ->constrained('districts')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->text('address')->nullable();
            $table->text('bio')->nullable();
            $table->tinyInteger('status')->default(1)
                ->comment('0 - NOT_ACTIVE, 1-ACTIVE');
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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->dropForeign(['region_id', 'district_id']);
        });

        Schema::dropIfExists('user_profiles');
    }
}
