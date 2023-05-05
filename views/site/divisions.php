<h1>Подразделения</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Вид подразделения</th>
        <th>Адрес</th>

    </tr>
    <?php
    foreach ($divisions as $division) {
        echo '
                <tr>
                    <td>'. $division->id .'</td>
                    <td>'. $division-> id_subdivision .'</td>
                    <td>'. $division->address.'</td>
                </tr>
            ';
    }
    ?>

</table