<h1>Actualizar info de : <strong>{{ arbitro.nombre }}</strong></h1>

{{ link_to("arbitro/index", "Volver index", "class" : "btn btn-info pull-right") }}

<br>

{{ content() }}

{{ form("arbitro/edit/" ~ arbitro.id_arbitro, "method" : "post", "class" : "form-") }}
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text"
               class="form-control"
               value="{{ arbitro.nombre }}"
               name="name"
               placeholder="Nombre">
    </div>
    <div class="form-group">

        <select name="pais" class="btn">
            {% for item in paises %}

                {% set selected = "" %}
                {% if item.id_pais == arbitro.id_pais %}
                    {% set selected = "selected" %}
                {% endif %}

                <option value="{{ item.id_pais}}" {{ selected }}>
                    {{ item.pais }}
                </option>
            {% endfor %}
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="" value="Actualizar" class="btn btn-primary">
    </div>
{{ end_form() }}
