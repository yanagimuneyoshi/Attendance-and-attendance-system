<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>出勤退勤システム</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <div class="attendance-form">
    <h2>出勤記録</h2>
    <form action="{{ route('attendance.record') }}" method="post">
      @csrf
      <label for="name">名前:</label>
      <input type="text" name="name" required>

      <label for="date">日付:</label>
      <input type="date" name="date" required>

      <label for="time">時間:</label>
      <input type="time" name="time" required>

      <button type="submit" name="action" value="check_in">出勤</button>
      <button type="submit" name="action" value="check_out">退勤</button>
    </form>
  </div>
</body>

</html>