
<h1> Arbitros</h1>

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
        </tr>
    </thead>
    <tbody>
        <?php foreach ($arbitros as $item) { ?>
            <tr>
                <td>
                    <?= $item['nombre'] ?>
                </td>
                <td>
                    <?= $item['pais'] ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
