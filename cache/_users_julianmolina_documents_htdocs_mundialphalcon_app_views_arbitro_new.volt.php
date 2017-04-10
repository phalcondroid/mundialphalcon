<h1>Crear arbitro</h1>

<a href="<?= $this->url->get('arbitro/index') ?>" class="btn btn-info pull-right">
    <span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
</a>

<br>

<?= $this->getContent() ?>

<?= $this->tag->form(['arbitro/new', 'method' => 'post', 'class' => 'form-']) ?>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
    </div>
    <div class="form-group">
        <select name="pais" class="btn">
            <?php foreach ($paises as $item) { ?>
                <option value="<?= $item->id_pais ?>">
                    <?= $item->pais ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="" value="Enviar" class="btn btn-success">
    </div>
<?= $this->tag->endForm() ?>
