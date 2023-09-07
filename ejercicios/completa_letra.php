<div class="card-deck">
    <div class="card border-danger col-md-4 mb-4 display-flex">
        <h4 class="card-title font-weight-bold text-center p-3">P_PÁ</h4>

        <div>
            <img src="img/Papa.jpg" style="width: 100%;" alt="Imagen Papá">
        </div>
        
        <div class="card-body">
            <div class="row">
                <div class="input-group col-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radioGroup" aria-label="Radio button for following text input" value="P">
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with radio button" value="P" readonly>
                </div>

                <div class="input-group col-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radioGroup" aria-label="Radio button for following text input" value="C">
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with radio button" value="C" readonly>
                </div>

                <div class="input-group col-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radioGroup" aria-label="Radio button for following text input" value="A">
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with radio button" value="A" readonly>
                </div>
            </div>
            

            <script>
                function V1() {
                    // Obtén todos los elementos de radio con el nombre "radioGroup"
                    var elementosRadio = document.getElementsByName("radioGroup");

                    // Variable para almacenar el texto del radio button seleccionado
                    var textoSeleccionado = "";

                    event.preventDefault();

                    // Itera a través de los elementos de radio para encontrar el seleccionado
                    for (var i = 0; i < elementosRadio.length; i++) {
                        if (elementosRadio[i].checked) {
                            // Obtén el valor del texto del input asociado al radio button
                            textoSeleccionado = elementosRadio[i].value;
                            break; // Detén la iteración una vez que encuentres el seleccionado
                        }
                    }

                    if (textoSeleccionado == "A"){
                        alert("Respuesta correcta")
                    }else{
                        alert("Respuesta incorrecta")
                    }
                }
            </script>



            <a onclick="V1()" href="" class="btn btn-outline-danger btn-block mt-4">¡HECHO!</a>
        </div>
    </div>

    <div class="card border-danger col-md-4 mb-4 display-flex">
        <h4 class="card-title font-weight-bold text-center p-3">MA_Á</h4>

        <div>
            <img src="img/Mama.jpg" style="width: 100%;" alt="Imagen Mamá">
        </div>
        
        <div class="card-body">
            <div class="row">
                <div class="input-group col-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radioGroup2" aria-label="Radio button for following text input" value="B">
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with radio button" value="B" readonly>
                </div>

                <div class="input-group col-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radioGroup2" aria-label="Radio button for following text input" value="A">
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with radio button" value="A" readonly>
                </div>

                <div class="input-group col-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radioGroup2" aria-label="Radio button for following text input" value="E">
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with radio button" value="E" readonly>
                </div>
            </div>

            <script>
                function V2() {
                    // Obtén todos los elementos de radio con el nombre "radioGroup"
                    var elementosRadio = document.getElementsByName("radioGroup2");

                    // Variable para almacenar el texto del radio button seleccionado
                    var textoSeleccionado = "";

                    event.preventDefault();

                    // Itera a través de los elementos de radio para encontrar el seleccionado
                    for (var i = 0; i < elementosRadio.length; i++) {
                        if (elementosRadio[i].checked) {
                            // Obtén el valor del texto del input asociado al radio button
                            textoSeleccionado = elementosRadio[i].value;
                            break; // Detén la iteración una vez que encuentres el seleccionado
                        }
                    }

                    if (textoSeleccionado == "A"){
                        alert("Respuesta correcta")
                    }else{
                        alert("Respuesta incorrecta")
                    }
                }
            </script>

            <a onclick="V2()" class="btn btn-outline-danger btn-block mt-4">¡HECHO!</a>
        </div>
    </div>

    <div class="card border-danger col-md-4 mb-4 display-flex">
        <h4 class="card-title font-weight-bold text-center p-3">AG_A</h4>

        <div>
            <img src="img/agua.png" style="width: 100%;" alt="Imagen Papá">
        </div>
        
        <div class="card-body">
            <div class="row">
                <div class="input-group col-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radioGroup3" aria-label="Radio button for following text input">
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with radio button" value="A" readonly>
                </div>

                <div class="input-group col-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radioGroup3" aria-label="Radio button for following text input">
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with radio button" value="B" readonly>
                </div>

                <div class="input-group col-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="radioGroup3" aria-label="Radio button for following text input">
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with radio button" value="U" readonly>
                </div>
            </div>

            <a href="" class="btn btn-outline-danger btn-block mt-4">¡HECHO!</a>
        </div>
    </div>
</div>