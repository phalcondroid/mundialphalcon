<h1>Crear arbitro</h1>

<a href="{{ url("arbitro/index") }}" class="btn btn-info pull-right">
    <span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
</a>

<br>

{{ content() }}

{{ form("arbitro/new", "method" : "post", "class" : "form-") }}
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
    </div>
    <div class="form-group">
        <select name="pais" class="btn">
            {% for item in paises %}
                <option value="{{ item.id_pais}}">
                    {{ item.pais }}
                </option>
            {% endfor %}
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="" value="Enviar" class="btn btn-success">
    </div>
{{ end_form() }}
