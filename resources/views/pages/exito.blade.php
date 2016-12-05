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

         <div class="background"></div>
                    <div id="titulo">
                        <div class="letter">
                            <div id="divHeaderText" class="page-content">
                                    <div id="divHeaderLineS">Se ha logrado con exito el registro.</div><br />
                                    <div id="divHeaderLineS2">Puede dirigirse a la pagina de inicio</div><br />
                                    <div class="boton">
                                    <input type="button" name="next" class="next action-button" value="De acuerdo" onClick=" window.location.href='/' " />                                
                                    </div>
                            </div>
                        </div>
                    </div>
            <!--Edit Main Content Area here-->
        
            </div>
            <!--End Main Content Area here-->

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<footer>
     @include('includes.footer')
</footer>

</body>
</html>


