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

        <div class="breadcrumbs">
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>3-Column</span>
            </div> 

        <div class="row-fluid">
			
			<!--Edit Sidebar Content here-->
                <div class="span3">                    
                 <h3>Left Sidebar</h3>
                 <p>Lorem Ipsum is simply dummy text of the printing and <a href="#">typesetting industry</a>.</p>
				 <p> Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>     
                <!-- Start Side Categories -->    
				
        <h3>Static Image</h3>        
          <img src="images/refreshment.jpg" class="img-rounded" alt="">
		  
			<h3>Another Section</h3>
                 <p>Lorem Ipsum is simply dummy text of the printing and <a href="#">typesetting industry</a>.</p>
				 <p> Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>                 	
          </div>
				<!--/End Sidebar Content -->        				
					                 
            	<!--Edit Main Content Area here-->
                <div class="span6" id="divMain">

                    <h1>Three Column</h1>
					<hr>	
                    <p>Aliquam a tellus quam. Phasellus sit amet bibendum nunc. Donec lobortis nulla diam, a laoreet nisi rhoncus vitae. Suspendisse tincidunt, nulla sed convallis consectetur, diam enim ultricies nulla, a luctus odio nisi in ligula. Aenean ornare rhoncus fermentum. Suspendisse et enim in nibh dictum blandit et id nisi. Duis mollis, libero id venenatis viverra, metus lacus placerat turpis, at semper orci odio id lectus. Proin fringilla quam porttitor est mattis, id aliquam est laoreet. Nulla congue urna nisi, eu commodo dolor aliquet eget. Donec ullamcorper diam quis porttitor convallis. Aliquam erat volutpat. Phasellus pulvinar sagittis nunc et adipiscing.</p>
                    <p>Duis facilisis tellus ante, eu sodales neque ornare vitae. Pellentesque laoreet velit diam, quis tempor est fringilla sed. Curabitur in ullamcorper lectus, et gravida mauris. Suspendisse tristique euismod metus, quis facilisis lectus cursus faucibus. Nulla sed leo sed tellus egestas mattis sed id libero. Aenean at scelerisque augue. Phasellus at sem porttitor, auctor metus pharetra, lacinia sapien.</p>
                    <p>Etiam enim dui, dictum vitae lobortis quis, placerat feugiat leo. Sed commodo elit orci, non tincidunt velit suscipit in. Nulla facilisi. Praesent vel eros tristique, lobortis orci vitae, interdum quam. In hac habitasse platea dictumst. Praesent lobortis iaculis ante, at laoreet est pulvinar vel. Cras vulputate tempus nulla eget venenatis. Suspendisse magna lacus, tincidunt nec pulvinar sit amet, semper quis neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras vehicula volutpat enim, id vehicula dolor porttitor in. Nam vehicula velit erat, eu consectetur elit luctus ut. Aliquam ac convallis enim, et venenatis dui. Maecenas et leo metus. </p>		
                    					
				</div>	                             
                <!--Edit Sidebar Content here-->
                <div class="span3">                    
                 <h3>Right Sidebar</h3>
                 <p>Lorem Ipsum is simply dummy text of the printing and <a href="#">typesetting industry</a>.</p>
				 <p> Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>     
                <!-- Start Side Categories -->              
		
        
            <!-- Edit Video -->
			  <h3>Video</h3>
              <article class="youtube video flex-video">
                  <iframe width="560" height="315" src="http://www.youtube.com/embed/n6VQsOvNvyQ" frameborder="0" allowfullscreen></iframe>
              </article>
	        <!-- /End Video -->   

	
			<h3>Another Section</h3>
                 <p>Lorem Ipsum is simply dummy text of the printing and <a href="#">typesetting industry</a>.</p>
				 <p> Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>                 	
          </div>
				<!--/End Sidebar Content -->    					                  
				<!--/End Main Content Area here-->	                
					
							
            </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<footer>
    @include('includes.footer')
</footer>



</body>
</html>