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
                    <form id="msform" action="/pasos">
                      <!-- progressbar -->
                      <!-- fieldsets -->
                      <fieldset>
                        <p class="fs-title">Registrar Receta</p>
                        <p class="fs-title">Informacion basica</p>
                        <br>
                        <input type="text" name="fuente" placeholder="Fuente de la receta.." />
                        <input type="text" name="ubicacion" placeholder="Ubicacion de la receta.." />
                        <!-- Como hacer un select
                        <select>
                          <option value="a">Diabetes Type A</option>
                          <option value="b">Diabetes Type B</option>
                        </select>
                        -->
                        <br>
                                   
                        
                        <input type="number" name="pasos" placeholder="Numero de pasos" />
                
                        <input type="submit" name="next" class="next action-button" value="Continuar" />
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
    @include('includes.footer')

</footer>




<script src="scripts/step.js" type="text/javascript"></script> 





</body>
</html>