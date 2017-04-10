
<h1> Arbitros</h1>

<a href="<?= $this->url->get('arbitro/new') ?>" class="btn btn-success pull-right">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</a>

<br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>
                nombre
            </th>
            <th>
                País
            </th>
            <th>
            </th>
            <th>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($arbitros as $item) { ?>
            <tr>
                <td>
                    <?= $item->nombre ?>
                </td>
                <td>
                    <?= $item->Pais->pais ?>
                </td>
                <td>
                    <a href="<?= $this->url->get('arbitro/edit/' . $item->id_arbitro) ?>" class="btn btn-warning pull-right">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                </td>
                <td>
                    <a href="<?= $this->url->get('arbitro/delete/' . $item->id_arbitro) ?>" class="btn btn-danger pull-right">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
