<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceRecord extends Model
{
    use HasFactory;

    protected $table = 'attendance_records'; // データベースのテーブル名

    protected $fillable = [
        'name',
        'date',
        'time',
        'action', // 出勤か退勤かを示すカラムを追加
    ];
}
