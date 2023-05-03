<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NTS</title>
</head>
<body>

<style>
 form>a{
     text-align: center;

 }

 form>a{
     text-align: center;
     width: 350px;
     height: 250px;

 }
 form>a:last-child{
     margin-left: 100px;
 }
</style>

<div>
    <h2><?= $message ?? ''; ?></h2>
</div>

<form>
    <a href="<?= app()->route->getUrl('/premises') ?>">Помещение</a>
        <a href="<?= app()->route->getUrl('/divisions') ?>">Подразделения</a>
</form>




</body>
</html>

