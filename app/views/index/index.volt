
<a href="{{ url("arbitro/index") }}" class="btn btn-success pull-right">
Ver Arbitros
</a>

<h1> Partidos sin jugar</h1>

<br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>
                País
            </th>
            <th>
                #
            </th>
            <th>
                País
            </th>
            <th>
                Arbitro
            </th>
        </tr>
    </thead>
    <tbody>
        {% for item in varPartidos %}
            <tr>
                <td>
                    {{ item["e1"] }}
                </td>
                <td>
                    vs
                </td>
                <td>
                    {{ item["e2"] }}
                </td>
                <td>
                    {{ item["arbitro"] }}
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
