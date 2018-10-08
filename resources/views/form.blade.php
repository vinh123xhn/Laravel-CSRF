<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
Form mẫu kiểm tra CSRF
<form method="post" action="{{ route('submit') }}">
    <input name="name" placeholder="Điền thông tin">
    <input type="submit" value="Chấp nhận">
</form>
</body>
</html>