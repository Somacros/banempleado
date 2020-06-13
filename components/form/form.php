<?php

    function createForm() {
        echo "
        <form>
            <div class='form-row justify-content-center mb-4'>
                <h1>Solicitud de préstamo</h1>
            </div>
            <div class='form-row'>
                <div class='form-group col-md-3'>
                    <label for='inputText'>Número de Empleado</label>
                    <input type='text' class='form-control' id='inputText'>
                </div>
                <div class='form-group col-md-6'>
                    <label for='NombreCompleto'>Nombre Completo</label>
                    <input type='text' class='form-control' id='NombreCompleto'>
                </div>
                <div class='form-group col-md-3'>
                    <label>Sexo</label>
                    <div class='form-check'>
                        <input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios1' value='Hombre' checked>
                        <label class='form-check-label' for='exampleRadios1'>
                        Hombre
                        </label>
                    </div>
                    <div class='form-check'>
                        <input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios2' value='Mujer'>
                        <label class='form-check-label' for='exampleRadios2'>
                        Mujer
                        </label>
                    </div>
                </div>
            </div>
            <div class='form-row'>
                <div class='form-group col-md-3'>
                    <label for='inputAddress'>Dirección</label>
                    <input type='text' class='form-control' id='inputAddress' placeholder='Calle Principal 1234 Col. Ejemplo'>
                </div>
                <div class='form-group col-md-3'>
                    <label for='inputState'>Estado</label>
                    <select id='inputState' class='form-control'>
                        <option>Aguascalientes</option>
                        <option>Baja California</option>
                        <option>Baja California Sur</option>
                        <option>Campeche</option>
                        <option>Chihuahua</option>
                        <option>Chiapas</option>
                        <option>Coahuila</option>
                        <option>Colima</option>
                        <option>Durango</option>
                        <option>Guanajuato</option>
                        <option>Guerrero</option>
                        <option>Hidalgo</option>
                        <option>Jalisco</option>
                        <option>México</option>
                        <option>Michoacán</option>
                        <option>Morelos</option>
                        <option>Nayarit</option>
                        <option>Nuevo León</option>
                        <option>Oaxaca</option>
                        <option>Puebla</option>
                        <option>Querétaro</option>
                        <option>Quintana Roo</option>
                        <option>San Luis Potosí</option>
                        <option>Sinaloa</option>
                        <option>Sonora</option>
                        <option>Tabasco</option>
                        <option>Tamaulipas</option>
                        <option>Tlaxcala</option>
                        <option>Veracruz</option>
                        <option>Yucatán</option>
                        <option>Zacatecas</option>
                    </select>
                </div>
                <div class='form-group col-md-3'>
                    <label for='inputCity'>Ciudad</label>
                    <input type='text' class='form-control' id='inputCity'>
                </div>
                <div class='form-group col-md-2'>
                    <label for='inputZip'>C.P.</label>
                    <input type='text' class='form-control' id='inputZip'>
                </div>
            </div>

            <div class='form-row'>
                
                <div class='form-group col-md-3 mr-3 '>
                    <label for='salarioActual'>Sueldo actual</label>
                    <div class='input-group-prepend'>
                        <span class='input-group-text'>$</span>
                        <input type='text' class='form-control' id='salarioActual' aria-label='Cantidad'>
                        <div class='input-group-append'>
                            <span class='input-group-text'>.00</span>
                        </div>
                    </div>
                </div>

                <div class='form-group col-md-3 ml-3 '>
                    <label for='prestamodeseado'>Préstamo deseado</label>
                    <div class='input-group-prepend'>
                        <span class='input-group-text'>$</span>
                        <input type='text' class='form-control' id='prestamodeseado' aria-label='Cantidad'>
                        <div class='input-group-append'>
                            <span class='input-group-text'>.00</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class='input-group mb-3'>
                <div class='custom-file'>
                    <input type='file' class='custom-file-input' id='inputGroupFile02'>
                    <label class='custom-file-label' for='inputGroupFile02' aria-describedby='inputGroupFileAddon02'>Choose file</label>
                </div>
                <div class='input-group-append'>
                    <span class='input-group-text' id='inputGroupFileAddon02'>Upload</span>
                </div>
            </div>
            <div class='form-group'>
                <div class='form-check'>
                    <input class='form-check-input' type='checkbox' id='gridCheck'>
                    <label class='form-check-label' for='gridCheck'>
                    Check me out
                    </label>
                </div>
            </div>
            <button type='submit' class='btn btn-primary'>Solicitar</button>
        </form>";
    }


?>