<!-- resources/views/admin.blade.php -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <title>管理画面</title>
</head>

<body>
  <div class="admin-container">
    <h1>出勤退勤管理</h1>

    <div class="button-group">
      <a href="{{ url('/') }}" class="back-button">戻る</a>
    </div>
    <form class="create-form">

      <div class="search-form">
        <label for="name">名前:</label>
        <input type="text" name="name" id="name">

        <label for="date">日付:</label>
        <input type="date" name="date" id="date">

        <label for="time">時間:</label>
        <input type="time" name="time" id="time">

        <button type="submit" onclick="search()">検索</button>
      </div>

      <table class="attendance-table">
        <thead>
          <tr>
            <th>名前</th>
            <th>日付</th>
            <th>時間</th>
            <th>退勤</th>
            <th>出勤</th>
          </tr>
        </thead>
        <tbody>
          @foreach($attendanceRecords as $record)
          <tr>
            <td>{{ $record->name }}</td>
            <td>{{ $record->date }}</td>
            <td>{{ $record->time }}</td>
            <td>{{ $record->action === 'check_out' ? $record->created_at : '' }}</td>
            <td>{{ $record->action === 'check_in' ? $record->created_at : '' }}</td>
            <td>
              {{ $record->id }}
              <form action="/admin/delete" method="post">

                @method('DELETE')
                @csrf
                <input type="hidden" name="id" value="{{ $record->id }}">
                <button type="submit">削除</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>


</body>

</html>