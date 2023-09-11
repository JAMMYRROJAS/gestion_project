<div class="card-deck">

    <script>
        function validate() {
            var elementosRadio = document.getElementsByName("radioGroup");
            var textoSeleccionado = "";
            event.preventDefault();
            
            for (var i = 0; i < elementosRadio.length; i++) {
                if (elementosRadio[i].checked) {
                    textoSeleccionado = elementosRadio[i].value;
                    break;
                }
            }

            if (textoSeleccionado == "right"){
                Swal.fire('😁', '¡Buen trabajo!','success')
            }else{
                Swal.fire('😟', 'Inténtalo de nuevo', 'error');
            }
        }
    </script>

    <div class="card border-danger col-md-4 mb-4 display-flex">
        <h4 class="card-title font-weight-bold text-center p-3">_ _ Ñ A</h4>

        <div>
            <img src="img/ninna.jpg" style="width: 100%;" alt="Imagen Niña">
        </div>
        
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios1" value="right" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        N I
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios2" value="C A">
                    <label class="form-check-label" for="exampleRadios2">
                        C A
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios3" value="M A">
                    <label class="form-check-label" for="exampleRadios3">
                        M A
                    </label>
                </div>

            </div>
            <a onclick="validate()" href="" class="btn btn-outline-danger btn-block mt-4">¡HECHO!</a>
        </div>
    </div>

    <div class="card border-danger col-md-4 mb-4 display-flex">
        <h4 class="card-title font-weight-bold text-center p-3">P E _ _ T A</h4>

        <div>
            <img src="img/PELOTA.jpg" style="width: 100%;" alt="Imagen Pelota">
        </div>
        
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios1" value="C O" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        C O
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios2" value="S A">
                    <label class="form-check-label" for="exampleRadios2">
                        S A
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios3" value="right">
                    <label class="form-check-label" for="exampleRadios3">
                        L O
                    </label>
                </div>

            </div>
            <a onclick="validate()" href="" class="btn btn-outline-danger btn-block mt-4">¡HECHO!</a>
        </div>
    </div>

    <div class="card border-danger col-md-4 mb-4 display-flex">
        <h4 class="card-title font-weight-bold text-center p-3">F A _ _ L I A</h4>

        <div>
            <img src="img/FAMILIA.jpg" style="width: 100%;" alt="Imagen Familia">
        </div>
        
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios1" value="right" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        M I
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios2" value="N U">
                    <label class="form-check-label" for="exampleRadios2">
                        N U
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios3" value="R A">
                    <label class="form-check-label" for="exampleRadios3">
                        R A
                    </label>
                </div>

            </div>
            <a onclick="validate()" href="" class="btn btn-outline-danger btn-block mt-4">¡HECHO!</a>
        </div>
    </div>
</div>