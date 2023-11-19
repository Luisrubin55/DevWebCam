<fieldset class="formulario__fieldset">
    <legend class="formulario__legend"> Información Evento</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre Evento</label>
        <input type="text" name="nombre" id="nombre" class="formulario__input" placeholder="Nombre Evento" value="<?php echo $evento->nombre ?>">
    </div>
    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripción</label>
        <textarea name="descripcion" id="descripcion" class="formulario__input" placeholder="descripcion Evento" rows="3"><?php echo $evento->descripcion ?></textarea>
    </div>
    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Categoría o Tipo de Evento </label>
        <select name="categoria_id" id="categoria" class="formulario__select">
            <option value="">--Seleccionar--</option>
            <?php foreach ($categorias as $categoria) { ?>
                <option <?php echo ($evento->categoria_id === $categoria->id) ? 'selected' : '' ?> value="<?php echo $categoria->id ?>"><?php echo $categoria->nombre ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Selecciona el día</label>
        <div class="formulario__radio">
            <?php foreach ($dias as $dia) { ?>
                <div>
                    <label for="<?php echo strtolower($dia->nombre) ?>"><?php echo $dia->nombre ?></label>

                    <input type="radio" id="<?php echo strtolower($dia->nombre) ?>" name="dia" value="<?php echo $evento->dia_id ?>"  <?php echo ($evento->dia_id === $dia->id) ? 'checked' : ''; ?>>
                </div>
            <?php } ?>
        </div>
        <input type="hidden" name="dia_id" value="<?php echo $evento->dia_id ?>">
    </div>

    <div id="horas" class="formulario__campo">
        <label for="formulario__label">Seleccionar Hora</label>
        <ul id="horas" class="horas">
            <?php foreach ($horas as $hora) { ?>
                <li data-hora-id="<?php echo $hora->id ?>" class="horas__hora horas__hora--desabilitado"><?php echo $hora->hora ?></li>
            <?php } ?>
        </ul>
        <input type="hidden" name="hora_id" value="<?php echo $evento->hora_id ?>">
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend"> Información Extra</legend>

    <div class="formulario__campo">
        <label for="ponentes" class="formulario__label">Ponente</label>
        <input type="text" id="ponentes" class="formulario__input" placeholder="Buscar Ponentes">
        <ul id="listado-ponentes" class="listado-ponentes"></ul>
        <input type="hidden" name="ponente_id" value="<?php echo $evento->ponente_id ?>">
    </div>
    <div class="formulario__campo">
        <label for="disponibles" class="formulario__label">Lugares Disponibles</label>
        <input type="number" min="1" id="disponibles" name="disponibles" class="formulario__input" placeholder="Ej. 20" value="<?php echo $evento->disponibles ?>">
    </div>
</fieldset>