<h1>Actualizar info de : <strong><?= $arbitro->nombre ?></strong></h1>

<?= $this->tag->linkTo(['arbitro/index', 'Volver index', 'class' => 'btn btn-info pull-right']) ?>

<br>

<?= $this->getContent() ?>

<?= $this->tag->form(['arbitro/edit/' . $arbitro->id_arbitro, 'method' => 'post', 'class' => 'form-']) ?>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text"
               class="form-control"
               value="<?= $arbitro->nombre ?>"
               name="name"
               placeholder="Nombre">
    </div>
    <div class="form-group">

        <select name="pais" class="btn">
            <?php foreach ($paises as $item) { ?>

                <?php $selected = ''; ?>
                <?php if ($item->id_pais == $arbitro->id_pais) { ?>
                    <?php $selected = 'selected'; ?>
                <?php } ?>

                <option value="<?= $item->id_pais ?>" <?= $selected ?>>
                    <?= $item->pais ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="" value="Actualizar" class="btn btn-primary">
    </div>
<?= $this->tag->endForm() ?>
