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
<?php
use Src\Auth\Auth;

if (Auth::user()->role->name_role === 'admin'):
    ?>
    <div class="hello"><p><a href="<?= app()->route->getUrl('/subdivisions') ?>">Подразделения</a></p></div>
    <div class="hello"><p><a href="<?= app()->route->getUrl('/premises') ?>">Помещение</a></p></div>
    <div class="hello"><p><a href="<?= app()->route->getUrl('/user') ?>">Пользователи</a></p></div>
<?php
else:
    ?>
    <div class="hello"><p><a href="<?= app()->route->getUrl('/subdivisions') ?>">Подразделения</a></p></div>
    <div class="hello"><p><a href="<?= app()->route->getUrl('/premises') ?>">Помещение</a></p></div>
<?php
endif;
?>


</form>
</body>
</html>

