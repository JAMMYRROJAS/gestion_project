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
        <h4 class="card-title font-weight-bold text-center p-3">P_PÁ</h4>

        <div>
            <img src="img/Papa.jpg" style="width: 100%;" alt="Imagen Papá">
        </div>
        
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios1" value="P">
                    <label class="form-check-label" for="exampleRadios1">
                        P
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios2" value="C">
                    <label class="form-check-label" for="exampleRadios2">
                        C
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios3" value="right">
                    <label class="form-check-label" for="exampleRadios3">
                        A
                    </label>
                </div>

            </div>
            <a onclick="validate()" href="" class="btn btn-outline-danger btn-block mt-4">¡HECHO!</a>
        </div>
    </div>

    <div class="card border-danger col-md-4 mb-4 display-flex">
        <h4 class="card-title font-weight-bold text-center p-3">MA_Á</h4>

        <div>
            <img src="img/Mama.jpg" style="width: 100%;" alt="Imagen Mamá">
        </div>
        
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios1" value="right">
                    <label class="form-check-label" for="exampleRadios1">
                        A
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios2" value="C">
                    <label class="form-check-label" for="exampleRadios2">
                        R
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios3" value="O">
                    <label class="form-check-label" for="exampleRadios3">
                        O
                    </label>
                </div>

            </div>
            <a onclick="validate()" href="" class="btn btn-outline-danger btn-block mt-4">¡HECHO!</a>
        </div>
    </div>

    <div class="card border-danger col-md-4 mb-4 display-flex">
        <h4 class="card-title font-weight-bold text-center p-3">AG_A</h4>

        <div>
            <img src="img/agua.png" style="width: 100%;" alt="Imagen Papá">
        </div>
        
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios1" value="P">
                    <label class="form-check-label" for="exampleRadios1">
                        P
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios2" value="right">
                    <label class="form-check-label" for="exampleRadios2">
                        U
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="radioGroup" id="exampleRadios3" value="A">
                    <label class="form-check-label" for="exampleRadios3">
                        A
                    </label>
                </div>

            </div>
            <a onclick="validate()" href="" class="btn btn-outline-danger btn-block mt-4">¡HECHO!</a>
        </div>
    </div>
</div>