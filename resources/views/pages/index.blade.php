<!DOCTYPE HTML>
<html>

<head>
@include('includes.head')
</head>
<body id="pageBody">

<header>
    @include('includes.header')
</header>

<div id="decorative1" style="position:relative">
    <div class="container">

        <div class="divPanel headerArea">
            <div class="row-fluid">
                <div class="span12">
    
                    <div id="headerSeparator"></div>

                    <div class="row-fluid">
                        <div class="span5">

                            <div id="divHeaderText" class="page-content">
                                <div id="divHeaderLine1">Disfruta del especial de postres de esta semana</div><br />
                                <div id="divHeaderLine2">Consiente tu gusto con los mejores postres.</div><br />                                
                            </div>

                        </div>
                        <div class="span7">
                            <!--Edit Camera Slider here-->
                            <div id="camera_wrap">
                                <div data-src="assets/images/caprese.jpg" ><div class="camera_caption fadeFromBottom cap1">Delicia de tarta de frambuesas azules y rojas</div></div><div data-src="assets/images/plate.jpg" ><div class="camera_caption fadeFromBottom cap2">Postre de vainilla con salsa de frutas</div></div>
                                <div data-src="assets/images/gourmandises.jpg" ><div class="camera_caption fadeFromBottom cap1">Macarroms de todos los deliciosos dulces sabores</div></div>
                            </div>
							<!--End Camera Slider here-->

                        </div>
                    </div>

                    <div id="headerSeparator2"></div>
        
                </div>
            </div>
   
        </div>

    </div>
</div>

<div id="contentOuterSeparator"></div>

<div class="container">
    <div id="backk">

    <div class="divPanel page-content">
        <!--Edit Main Content Area here-->
        <div class="row-fluid">

                <div class="span12" id="divMain">

                    <h1>Bienvenido</h1>

                    <p><strong>Lorem ipsum dolor sit amet,</strong> consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
					
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>

                    <hr style="margin:45px 0 35px" />
					
                    <!-- Un slider de fotos, para usar despues> 
				<div class="row-fluid">
				
                    <div class="span4">
                    <h4>About Us</h4>
                    <img src="images/home-1.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">                
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  <br /></p>
					<p><a class="btn btn-primary" style="margin:5px 0px 15px;">Learn more</a></p>
                    </div>
					
                    <div class="span4">                
                    <h4>Our Passion</h4>
                    <img src="images/home-2.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">  
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.   <br /></p>
					<p><a class="btn btn-primary" style="margin:5px 0px 15px;">Learn more</a></p>
                    </div>
					
                    <div class="span4">                
                    <h4>Special Events</h4>
                    <img src="images/home-3.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">  
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.   <br /></p>
					<p><a class="btn btn-primary" style="margin:5px 0px 15px;">Learn more</a></p>
                    </div>
					
			    </div>
				
				    <hr style="margin:45px 0 35px" />

                    <div class="lead">
                        <h1>Lorem ipsum dolor sit amet.</h1> 
                        <h3>Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus.</h3>
                    </div>
                    <br />

                    <div class="list_carousel responsive">
                        <ul id="list_photos">
                            <li><img src="carousal/muffin.jpg" class="img-polaroid">  </li>
                            <li><img src="carousal/strawberries.jpg" class="img-polaroid">  </li>
                            <li><img src="carousal/cheesecake.jpg" class="img-polaroid">  </li>
                            <li><img src="carousal/peppers.jpg" class="img-polaroid">  </li>
                            <li><img src="carousal/pomengranates.jpg" class="img-polaroid">  </li>
                            <li><img src="carousal/refreshment.jpg" class="img-polaroid">  </li>
                            <li><img src="carousal/kitchen.jpg" class="img-polaroid">  </li>
                            <li><img src="carousal/soup.jpg" class="img-polaroid">  </li>                            
                        </ul>
                    </div> 
					
					</br>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu metus risus. Mauris a facilisis justo, sit amet ornare lorem. In volutpat laoreet nisi, ac tempus dui convallis eget. Ut id lorem at leo suscipit dignissim. Donec eleifend porta sagittis. Aliquam at ullamcorper sem, et commodo quam.</p></br>
					<!--Edit Blockquote here-->
				
                    				
                   </div>

                </div>

            </div>
			<!--End Main Content Area here-->

        <div id="footerInnerSeparator"></div>
    </div>

</div>
<footer>
    <script src="assets/scripts/jquery.min.js"></script> 
    @include('includes.footer')
</footer>










</body>
</html>