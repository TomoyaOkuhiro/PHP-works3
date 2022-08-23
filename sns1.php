<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="sns2.php" method="post">
    名前
    <div><input type="text" name="n"></div>
    メッセージ
    <div><textarea name="m" id="" cols="30" rows="10"></textarea></div>
    <input type="submit" value="送信する">
  </form>

  <?php
  $db = new PDO("mysql:host=localhost;dbname=db", "root", "root");
  $ps = $db->query("SELECT * FROM tb ORDER BY num DESC");
  while ($r = $ps->fetch()) {;

    echo "{$r['num']} {$r['name']} {$r['mes']} {$r['date']}<hr>";
  }
  ?>
</body>

</html>