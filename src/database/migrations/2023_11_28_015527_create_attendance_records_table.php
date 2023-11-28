<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('attendance_records', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->time('time');
            $table->string('action'); // 出勤か退勤かを示すカラムを追加
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendance_records');
    }
}