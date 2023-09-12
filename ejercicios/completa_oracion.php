<div class="card-deck">
    <div class="card border-danger col-md-6 mb-4 display-flex">
        <div class="text-center">
            <img src="img/jugar-fulvo.gif" style="width: 80%;" alt="Imagen Papá">
        </div>

        <div class="card-body">
            <h4 class="card-title font-weight-bold text-center p-3 mt-3">El niño juega con la ______.</h4>
            <div class="row justify-content-center">
                <div class="form-check mx-4 mt-3">
                    <input class="form-check-input" type="radio" name="radioGroup1" id="exampleRadios1" value="P">
                    <label class="form-check-label" for="exampleRadios1">
                        casa
                    </label>
                </div>
                <div class="form-check mx-4 mt-3">
                    <input class="form-check-input" type="radio" name="radioGroup1" id="exampleRadios2" value="C">
                    <label class="form-check-label" for="exampleRadios2">
                        avión
                    </label>
                </div>
                <div class="form-check mx-4 mt-3">
                    <input class="form-check-input" type="radio" name="radioGroup1" id="exampleRadios3" value="right">
                    <label class="form-check-label" for="exampleRadios3">
                        pelota
                    </label>
                </div>

            </div>
            <a onclick="validate(1)" href="" class="btn btn-outline-danger btn-block mt-4">¡HECHO!</a>
        </div>
    </div>

    <div class="card border-danger col-md-6 mb-4 display-flex">
        <div class="text-center">
            <img src="img/auto-rapido.gif" style="width: 80%;" alt="Imagen Papá">
        </div>

        <div class="card-body">
            <h4 class="card-title font-weight-bold text-center p-3 mt-3">El _________ va veloz por la pista.</h4>
            <div class="row justify-content-center">
                <div class="form-check mx-4 mt-3">
                    <input class="form-check-input" type="radio" name="radioGroup2" id="exampleRadios1" value="right">
                    <label class="form-check-label" for="exampleRadios1">
                        automovil
                    </label>
                </div>
                <div class="form-check mx-4 mt-3">
                    <input class="form-check-input" type="radio" name="radioGroup2" id="exampleRadios2">
                    <label class="form-check-label" for="exampleRadios2">
                        perro
                    </label>
                </div>
                <div class="form-check mx-4 mt-3">
                    <input class="form-check-input" type="radio" name="radioGroup2" id="exampleRadios3">
                    <label class="form-check-label" for="exampleRadios3">
                        pizarra
                    </label>
                </div>

            </div>
            <a onclick="validate(2)" href="" class="btn btn-outline-danger btn-block mt-4">¡HECHO!</a>
        </div>
    </div>
</div>

<div class="card-deck">
    <div class="card border-danger col-md-6 mb-4 display-flex">
        <div class="text-center">
            <img src="img/perro-robot.gif" style="width: 80%;" alt="Imagen Papá">
        </div>

        <div class="card-body">
            <h4 class="card-title font-weight-bold text-center p-3 mt-3">El perro _____ es adorable.</h4>
            <div class="row justify-content-center">
                <div class="form-check mx-4 mt-3">
                    <input class="form-check-input" type="radio" name="radioGroup3" id="exampleRadios1">
                    <label class="form-check-label" for="exampleRadios1">
                        asado
                    </label>
                </div>
                <div class="form-check mx-4 mt-3">
                    <input class="form-check-input" type="radio" name="radioGroup3" id="exampleRadios2" value="right">
                    <label class="form-check-label" for="exampleRadios2">
                        robot
                    </label>
                </div>
                <div class="form-check mx-4 mt-3">
                    <input class="form-check-input" type="radio" name="radioGroup3" id="exampleRadios3">
                    <label class="form-check-label" for="exampleRadios3">
                        mesa
                    </label>
                </div>

            </div>
            <a onclick="validate(3)" href="" class="btn btn-outline-danger btn-block mt-4">¡HECHO!</a>
        </div>
    </div>

    <div class="card border-danger col-md-6 mb-4 display-flex">
        <div class = "text-center">
            <img src="img/sol.gif" style="width: 80%;" alt="Imagen Papá">
        </div>
        
        <div class="card-body">
            <h4 class="card-title font-weight-bold text-center p-3 mt-3">El ___ está que arde.</h4>
            <div class="row justify-content-center">
                <div class="form-check mx-4 mt-3">
                    <input class="form-check-input" type="radio" name="radioGroup4" id="exampleRadios1" value="P">
                    <label class="form-check-label" for="exampleRadios1">
                        cerdo
                    </label>
                </div>
                <div class="form-check mx-4 mt-3">
                    <input class="form-check-input" type="radio" name="radioGroup4" id="exampleRadios2" value="C">
                    <label class="form-check-label" for="exampleRadios2">
                        luna
                    </label>
                </div>
                <div class="form-check mx-4 mt-3">
                    <input class="form-check-input" type="radio" name="radioGroup4" id="exampleRadios3" value="right">
                    <label class="form-check-label" for="exampleRadios3">
                        sol
                    </label>
                </div>
            </div>
            <a onclick="validate(4)" href="" class="btn btn-outline-danger btn-block mt-4">¡HECHO!</a>
        </div>
    </div>
</div>



<script>
    function validate(num) {
        var elementosRadio = document.getElementsByName(`radioGroup${num}`);
        var textoSeleccionado = "";
        event.preventDefault();

        for (var i = 0; i < elementosRadio.length; i++) {
            if (elementosRadio[i].checked) {
                textoSeleccionado = elementosRadio[i].value;
                break;
            }
        }

        if (textoSeleccionado == "right") {
            Swal.fire('😁', '¡Buen trabajo!', 'success')
        } else {
            Swal.fire('😟', 'Inténtalo de nuevo', 'error');
        }
    }
</script>