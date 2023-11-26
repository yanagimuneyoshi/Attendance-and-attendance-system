<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
  <title>退勤完了</title>
</head>

<body>
  <div class="container">
    <h1>退勤が完了しました。</h1>
    <!-- ここに退勤完了のメッセージや画面のコンテンツを追加 -->
    <div class="button-container">
      <a href="/" class="button" type="submit" name="action" value="check_in">戻る</a>
      <a href="/admin" class="button" type="submit" name="action" value="check_out">管理画面</a>
    </div>
  </div>
</body>

</html>