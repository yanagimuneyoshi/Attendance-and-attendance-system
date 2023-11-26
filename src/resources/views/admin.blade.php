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
        <!-- データは実際のデータベースから取得する形に変更 -->
        <tr>
          <td>John Doe</td>
          <td>2023-11-27</td>
          <td>09:00 AM</td>
          <td>18:00 PM</td>
          <td>09:00 AM</td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    function search() {
      alert('検索処理を実行します。');
      // 実際の検索処理をここに追加
    }
  </script>
</body>

</html>