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

        <div style="padding-top: 50px;padding-bottom: 50px; padding-left:100px;">			
			<div class="sprice">
				<div class="sprice-title g-grey">
					Menu 1
				</div><!-- sprice -->
				<div class="sprice-circle s-grey">
					<span>$</span>10
				</div>
				<div class="sprice-cat">Pollo teriyaki</div><!--sprice-cat-->
				<div class="sprice-cat">Ensalada cesar</div><!--sprice-cat-->
				<div class="sprice-cat">Vegetales al vapor</div><!--sprice-cat-->
				<div class="sprice-cat">Jugo de varias frutas</div><!--sprice-cat-->
				<div class="sprice-cat">Tarta de frutas</div><!--sprice-cat-->

				<div><input type="button" value="Escoger" class="sprice-button b-grey"></div>
			</div><!-- sprice -->
			
			<div class="sprice">
				<div class="sprice-title g-blue">
					Menu 2
				</div><!-- sprice -->
				<div class="sprice-circle s-blue">
					<span>$</span>16
				</div>
				<div class="sprice-cat">Carne asada</div><!--sprice-cat-->
				<div class="sprice-cat">Papas al aji</div><!--sprice-cat-->
				<div class="sprice-cat">Ensalada fuerte</div><!--sprice-cat-->
				<div class="sprice-cat">Citricos del valle</div><!--sprice-cat-->
				<div class="sprice-cat">Tarta de frutas</div><!--sprice-cat-->



				<div><input type="button" value="Escoger" class="sprice-button b-blue"></div>
			</div><!-- sprice -->
			
			<div class="sprice">
				<div class="sprice-title g-green">
					Menu 3
				</div><!-- sprice -->
				<div class="sprice-circle s-green">
					<span>$</span>35
				</div>
				<div class="sprice-cat">Carne asada</div><!--sprice-cat-->
				<div class="sprice-cat">Papas al aji</div><!--sprice-cat-->
				<div class="sprice-cat">Ensalada fuerte</div><!--sprice-cat-->
				<div class="sprice-cat">Citricos del valle</div><!--sprice-cat-->
				<div class="sprice-cat">Tarta de frutas</div><!--sprice-cat-->


				<div><input type="button" value="Escoger" class="sprice-button b-green"></div>
			</div><!-- sprice -->
			
			<div class="sprice">
				<div class="sprice-title g-orange">
					Menu 4 	
				</div><!-- sprice -->
				<div class="sprice-circle s-orange">
					<span>$</span>60
				</div>
				<div class="sprice-cat">Carne asada</div><!--sprice-cat-->
				<div class="sprice-cat">Papas al aji</div><!--sprice-cat-->
				<div class="sprice-cat">Ensalada fuerte</div><!--sprice-cat-->
				<div class="sprice-cat">Citricos del valle</div><!--sprice-cat-->
				<div class="sprice-cat">Tarta de frutas</div><!--sprice-cat-->

				<div><input type="button" value="Escoger" class="sprice-button b-orange">        </div>
			</div><!-- sprice -->
		</div>
        <div id="footerInnerSeparator"></div>
    </div>

</div>

<footer>
<script src="/assets/scripts/jquery.min.js" type="text/javascript"></script> 
    @include('includes.footer')
</footer>



</body>
</html>