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
                    <form id="msform" action="/exito">
                      <!-- progressbar -->
                      <!-- fieldsets -->
                      <fieldset>
                        <p class="fs-title">Registrar Ingrediente</p>
                        
                        <br>
                        <div class="preview img-wrapper"></div>
                        <div class="file-upload-wrapper">
                                <input type="file" name="file" class="file-upload-native" accept="image/*" />
                                <input type="text" disabled placeholder="upload image" class="file-upload-text" />
                        </div>
                        <input type="text" name="nombre" placeholder="Nombre del ingrediente.." />
                        <input type="number" name="calorias" placeholder="Numero de calorias.." />
                        <!-- Como hacer un select
                        <select>
                          <option value="a">Diabetes Type A</option>
                          <option value="b">Diabetes Type B</option>
                        </select>
                        -->
                        <br>
                      
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
    <script src="/assets/scripts/upload.js" type="text/javascript"></script> 
     @include('includes.footer')
</footer>







</body>
</html>