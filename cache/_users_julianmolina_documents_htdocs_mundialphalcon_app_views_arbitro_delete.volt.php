<h1><?= $arbitro->nombre ?></h1>

<a href="<?= $this->url->get('arbitro/index') ?>" class="btn btn-info pull-right">
    <span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
</a>

<br><br>

<?= $this->tag->form(['arbitro/delete/' . $arbitro->id_arbitro, 'method' => 'post']) ?>
    ¿Estas seguro que quires eliminar el arbitro?
    <div class="form-group">
        <input type="submit" name="" value="Eliminar" class="btn btn-danger">
    </div>
    <div class="form-group">
        <a href="<?= $this->url->get('arbitro/index') ?>" class="btn btn-warning">
            Cancelar
        </a>
    </div>
<?= $this->tag->endForm() ?>
