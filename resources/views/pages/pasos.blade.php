<!DOCTYPE HTML>
<html>
<head>
    @include('includes.head')

</head>
<body id="pageBody">

<header>
  @include('includes.header')

</header>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">


        <div class="row-fluid">
            <!--Edit Main Content Area here-->
                <div class="span12" id="divMain">
                <!-- multistep form -->
                    <!-- multistep form -->
                        <form id="msform" action="/exito">
                          <!-- progressbar -->
                          <ul id="progressbar">
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                            <li></li>

                          </ul>
                          <!-- Inicio de un paso, diferente por que el boton anterior lleva es a la informacion basica
                          de receta -->
                          <fieldset>
                            <h2 class="fs-title">Paso 1</h2>
                            <select>
                              <option selected disabled>Seleccione una operacion</option>
                              <option value="1">Hervir</option>
                              <option value="2">Hornear</option>
                              <option value="3">Freir</option>
                              <option value="4">Revolver</option>
                              <option value="5">Cortar</option>
                            </select>
                            <select>
                              <option selected disabled>Ingrediente</option>
                              <option value="1">Carne</option>
                              <option value="2">Pollo</option>
                              <option value="3">Zanahorias</option>
                              <option value="4">Lechuga</option>
                              <option value="5">Papa</option>
                            </select>
                            <select>
                              <option selected disabled>Utensilio</option>
                              <option value="1">Olla</option>
                              <option value="2">Sarten</option>
                              <option value="3">Batidora</option>
                              <option value="4">Moledora</option>
                              <option value="5">Cuchillo</option>
                            </select>
                             <input type="time" name="tiempo" />
                             <textarea name="comentario" placeholder="Deja un comentario sobre este paso..."></textarea> 
                            
                            
                            <input type="button" name="previous" class="previous action-button" value="Volver" onClick=" window.location.href='/registrar1' " />
                            <input type="button" name="next" class="next action-button" value="Next" />
                          </fieldset>
                          <!-- Final de un paso-->

                          <!-- Inicio de un paso, diferente porque el boton anterior se devuelve al paso anterior-->
                          <fieldset>
                              <h2 class="fs-title">Paso 2</h2>
                            <select>
                              <option selected disabled>Seleccione una operacion</option>
                              <option value="1">Hervir</option>
                              <option value="2">Hornear</option>
                              <option value="3">Freir</option>
                              <option value="4">Revolver</option>
                              <option value="5">Cortar</option>
                            </select>
                            <select>
                              <option selected disabled>Ingrediente</option>
                              <option value="1">Carne</option>
                              <option value="2">Pollo</option>
                              <option value="3">Zanahorias</option>
                              <option value="4">Lechuga</option>
                              <option value="5">Papa</option>
                            </select>
                            <select>
                              <option selected disabled>Utensilio</option>
                              <option value="1">Olla</option>
                              <option value="2">Sarten</option>
                              <option value="3">Batidora</option>
                              <option value="4">Moledora</option>
                              <option value="5">Cuchillo</option>
                            </select>
                             <input type="time" name="tiempo" />
                             <textarea name="comentario" placeholder="Deja un comentario sobre este paso..."></textarea>  
                             <input type="button" name="previous" class="previous action-button" value="Volver" />
                            <input type="button" name="next" class="next action-button" value="Next" />
                          </fieldset>
                          <!-- Final del paso-->


                             <!-- Inicio de un paso-->
                          <fieldset>
                              <h2 class="fs-title">Paso 3</h2>
                            <select>
                              <option selected disabled>Seleccione una operacion</option>
                              <option value="1">Hervir</option>
                              <option value="2">Hornear</option>
                              <option value="3">Freir</option>
                              <option value="4">Revolver</option>
                              <option value="5">Cortar</option>
                            </select>
                            <select>
                              <option selected disabled>Ingrediente</option>
                              <option value="1">Carne</option>
                              <option value="2">Pollo</option>
                              <option value="3">Zanahorias</option>
                              <option value="4">Lechuga</option>
                              <option value="5">Papa</option>
                            </select>
                            <select>
                              <option selected disabled>Utensilio</option>
                              <option value="1">Olla</option>
                              <option value="2">Sarten</option>
                              <option value="3">Batidora</option>
                              <option value="4">Moledora</option>
                              <option value="5">Cuchillo</option>
                            </select>
                             <input type="time" name="tiempo" />
                             <textarea name="comentario" placeholder="Deja un comentario sobre este paso..."></textarea>  
                             <input type="button" name="previous" class="previous action-button" value="Volver" />
                            <input type="button" name="next" class="next action-button" value="Next" />
                          </fieldset>
                          <!-- Final del paso-->
                          <fieldset>
                            <h2 class="fs-title">Registrar receta</h2>
                            <h3 class="fs-subtitle">Desea registrar la receta?</h3>
                            
                            <input type="button" name="previous" class="previous action-button" value="Volver" />
                            <input type="submit" name="next" class="next action-button" value="Registrar" />
                          </fieldset>
                        </form>
                    <!-- jQuery -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
                    <!-- jQuery easing plugin -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
                                        
       
                </div>
            <!--End Main Content Area-->
            </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<footer>
  <script src="assets/scripts/step.js" type="text/javascript"></script> 
  @include('includes.footer')

</footer>








</body>
</html>