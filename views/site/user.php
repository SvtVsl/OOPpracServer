<div class="users">
    <h1>Список пользователей</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Имя пользователя</th>
            <th>Роль</th>
            <th>Логин</th>
            <th>Пароль</th>
        </tr>
        <?php
        foreach ($users as $user) {
            ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->name ?></td>
                <td><?= $user->id_role ?></td>
                <td><?= $user->login ?></td>
                <td><?= $user->password ?></td>


            </tr>
            <?php
        }
        ?>
    </table>
</div>

