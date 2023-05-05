<div class="add_premises">
    <form method="post" class="add_prem">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <a>Номер помещения</a>
        <select class="form-select" aria-label="" name="number_premies">
            <option selected>Выбирите подразделение</option>
            <?php
            foreach ($owner_premises as $owner_premise) {?>
                <option value="<?=$owner_premise->id ?>"><?=$owner_premise->number_room?></option>
                <?php
            }
            ?>
        </select>
        <label>Площадь<input type="number" name="square"></label>
        <a>Вид подразделения</a>
        <select class="form-select" aria-label="" name="id_department">
            <option selected>Выберите вид подразделение</option>
            <?php
            foreach ($type_divisions as $type_division) {?>
                <option value="<?=$type_division->id?>"><?=$type_division->Name?></option>
                <?php
            }
            ?>
        </select>
        <a>Вид помещения</a>
        <select class="form-select" aria-label="" name="type_premises">
            <option selected>Выберите вид помещения</option>
            <?php
            foreach ($type_premises as $type_premise) {?>
                <option value="<?=$type_premise->id ?>"><?=$type_premise->species_name?></option>
                <?php
            }
            ?>
        </select>
        <label>Количество посадочных мест<input type="number" name="number_seats"></label>

        <button>Изменить</button>
    </form>
</div>