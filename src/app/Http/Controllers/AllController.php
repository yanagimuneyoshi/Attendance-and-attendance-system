<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function attendance()
    {
        return view('attendance');
    }

    public function leavingwork()
    {
        return view('leavingwork');
    }

    public function admin()
    {
        return view('admin');
    }


    public function saveAttendance(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'action' => 'nullable' // 'action' が空でもバリデーションを通す
        ]);

        AttendanceRecord::create($data);

        return redirect('/attendance')->with('success', '出勤記録が保存されました');
    }
}
