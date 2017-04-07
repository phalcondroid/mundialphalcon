
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
        {% for item in arbitros %}
            <tr>
                <td>
                    {{ item["nombre"] }}
                </td>
                <td>
                    {{ item["pais"] }}
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
