(function(){
    const horas = document.querySelector('#horas')

    if (horas) {
        const categoria = document.querySelector('[name="categoria_id"]')
        const dias = document.querySelectorAll('[name="dia"]')
        const input_HiddenDia = document.querySelector('[name="dia_id"]')
        const input_HiddenHora = document.querySelector('[name="hora_id"]')
        categoria.addEventListener('change', terminoBusqueda)
        dias.forEach( dia => dia.addEventListener('change', terminoBusqueda))

        let busqueda = {
            categoria_id: +categoria.value || '',
            dia: +input_HiddenDia.value || ''
        }

        if (!Object.values(busqueda).includes('')) {
            (async () => {
                await buscarEventos()
                //Resaltar la hora actual
                const id = input_HiddenHora.value
                const horaSeleccionada = document.querySelector(`[data-hora-id="${id}"]`)
                horaSeleccionada.classList.remove('horas__hora--desabilitado')
                horaSeleccionada.classList.add('horas__hora--seleccionada')

                horaSeleccionada.onclick = seleccionarHora
            })()
          
        }

        function terminoBusqueda(e){
            busqueda[e.target.name] = e.target.value
            //Reiniciar los campos ocultos y selector de horas
            input_HiddenHora.value = '';
            input_HiddenDia.value = '';
            const horaPrevia = document.querySelector('.horas__hora--seleccionada')
            if (horaPrevia) {
                horaPrevia.classList.remove('horas__hora--seleccionada')
            }
            if (Object.values(busqueda).includes('')) {
                return
            }
            buscarEventos();
        }

        async function buscarEventos(){
            const {dia, categoria_id} = busqueda
            const url = `/api/eventos-horario?dia_id=${dia}&categoria_id=${categoria_id}`
            const resultado = await fetch(url)
            const eventos = await resultado.json()

            obtenerHorasDisponibles(eventos)
        }

        function obtenerHorasDisponibles(eventos){
            //Reiniciar las horas 
            const listadoHoras = document.querySelectorAll('#horas li')
            listadoHoras.forEach( li => li.classList.add('horas__hora--desabilitado'))
            //Comprovar eventos ya tomados y quitar la variable de desabilitado
            const horasTomadas = eventos.map( evento => evento.hora_id)
            const listadoHorasArray = Array.from(listadoHoras);
            const resultado = listadoHorasArray.filter( li => !horasTomadas.includes(li.dataset.horaId))
            resultado.forEach( li => li.classList.remove('horas__hora--desabilitado'))

            const horasDisponibles = document.querySelectorAll('#horas li:not(.horas__hora--desabilitado)')
            horasDisponibles.forEach( hora => hora.addEventListener('click', seleccionarHora))
        }
        function seleccionarHora(e){
            //Desabilitar Hora previa si hay un nuevo click
            const horaPrevia = document.querySelector('.horas__hora--seleccionada')
            if (horaPrevia) {
                horaPrevia.classList.remove('horas__hora--seleccionada')
            }


            //Agregar clase de selccionado
            e.target.classList.add('horas__hora--seleccionada')

            input_HiddenHora.value = e.target.dataset.horaId

            //Llenar el campo oculto de dia
            input_HiddenDia.value = document.querySelector('[name="dia"]:checked').value

        }
    }
})();