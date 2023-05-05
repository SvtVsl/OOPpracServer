<h1>Список помещений</h1>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Номер помещения</th>
        <th>Площадь (м2)</th>
        <th>Вид подразделения</th>
        <th>Вид помещения</th>
        <th>Кол-во посадочных мест</th>
    </tr>
    <?php
    foreach ($premises as $premise) {
        ?>
                <tr>
                    <td><?=$premise->id ?></td>
                    <td><?=$premise-> number_premies?></td>
                    <td><?=$premise->square?></td>
                    <td><?=$premise->id_department ?></td>
                    <td><?= $premise->type_premises ?></td>
                    <td><?=$premise->number_seats ?></td>
                    <td><a href="<?= app()->route->getUrl('/update_premises?id=' . $premise->id) ?>">Изменить</a></td>
                </tr>
        <?php
    }
    ?>
</table>

<a href="<?= app()->route->getUrl('/add_premises') ?>">Добавить</a>








