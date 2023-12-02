<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AttendanceRecord;

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

        if ($data['action'] === 'check_in') {
            // check_in のロジックをここで処理
            AttendanceRecord::create($data);

            return view('/attendance');
        } elseif ($data['action'] === 'check_out') {
            // check_out のロジックをここで処理
            // ここに特定のチェックアウトのロジックを追加できます
            // ...

            return redirect('/leavingwork')->with('success', '退勤記録が保存されました');
        }

        // アクションが check_in でも check_out でもない場合
        return redirect('/')->with('error', '無効なアクションが指定されました');
        
    }
}
