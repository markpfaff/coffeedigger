<?php
//coffeedigger home page
include('includes/config.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>CoffeeDigger Main Page</title>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
	
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>
<!--header -->
<header>

<div class="container">
<div class="col-md-4">
<nav>
<ul>
	<li><a href="about.php">About</a></li>
	<li><a href="contact.php">Contact</a></li>
</ul>
</nav>
</div>    
    
<div class="logo col-md-4">
    
        <a href="index.php"><img class="icon" alt="logo" src="images/logo.png" title="link back to main page"></a>
</div>


<div class="col-md-4">

<div class="from-group">

    <form class="navbar-form searchbox" action="search.php" role="search">
                     <div class="input-group">
                          <input type="text" class="form-control" placeholder="Enter Coffee Name" name="term" id="srch-term">
                            <div class="input-group-btn">
                                 <button class="btn btn-default" type="submit" value="search"><span class="glyphicon glyphicon-search"></span></button>

                           </div>
                     </div>
                   </form>
        
</div>                   
</div>    

</div>    
</header>


    
    
<div class="filter">

<ul class="filter-function">
  <li class="current"><a href="#">Reset</a></li>
  <li><a href="#">Roaster</a>
        <ul class="filter-function">
            <li><a href="#">Stumptown</a></li>
            <li><a href="#">Caffe Vita</a></li>
            <li><a href="#">Tullys</a></li>
            <li><a href="#">Starbucks</a></li>
            <li><a href="#">Victrola</a></li>
            <li><a href="#">Fonte</a></li>
            <li><a href="#">Seattle Coffee Works</a></li>
            <li><a href="#">Herkimer</a></li>
        </ul>
  </li>
  <li><a href="#">Type</a>
        <ul class="filter-function">
            <li><a href="#">Espresso</a></li>
            <li><a href="#">Drip</a></li>
            <li><a href="#">Decaf</a></li>
            <li><a href="#">Blend</a></li>
            <li><a href="#">Single Origin</a></li>
        </ul>
  </li>
  <li><a href="#">Roast</a>
        <ul class="filter-function">
            <li><a href="#">Light</a></li>
            <li><a href="#">Medium</a></li>
            <li><a href="#">Dark</a></li>
        </ul>
  </li>
  <li><a href="#">Region</a>
        <ul class="filter-function">
            <li><a href="#">Africa</a></li>
            <li><a href="#">Indonesia</a></li>
            <li><a href="#">Latin America</a></li>
        </ul>
  </li>
  <li><a href="#">Price</a>
        <ul class="filter-function">
            <li><a href="#">$0-$10</a></li>
            <li><a href="#">$10-$15</a></li>
            <li><a href="#">$15-$20</a></li>
            <li><a href="#">$20-</a></li>
        </ul>
  </li>
  <li><a href="#">Trending</a></li>
</ul>

        
</div>



<!--section -->
<section>
<!--Container for grid-->
<div class="container">
<div class="mainbean">
		<div class="stumptown col-md-3">
                <div class="overview">
                
                <div class="stumptown indonesia trending $10-$15 light single-origin drip">
                    <a href="profile.php"><h3>Indonesia Bies Penantan</h3><h5>by Stumptown</h5></a>
                    <img src="images/shovel.png" alt="shovel" >
                    <p>123</p>
                </div>
                    
                <hr>
                <a href="profile.php"><img src="images/indonesia-sulawesi.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>    
          <div class="herkimer light africa trending $20- single-origin drip col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Kenya Ngunguru</h3><h5>by Herkimer</h5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                
                <hr>
				<a href="profile.php"><img src="images/kenya-ngunguru.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
            <div class="caffe-vita medium africa $20- single-origin drip col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Kenya Kiamabara</h3><h5>by Caffe Vita</h5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/kenya-kiamabara.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
            <div class="fonte dark drip blend $10-$15 col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>French Roast</h3><H5>by Fonte Coffee Roasters</H5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/french-roast.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			<div class="seattle-coffee-works trending latin-america $10-$15 single-origin medium drip espresso col-md-3">
                <div class="overview">
                
                <div class="review">
                <a href="profile.php"><h3>Brazil Carmo de Minas</h3><h5>by Seattle Coffee Works</h5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                <hr>
				<a href="profile.php"><img src="images/brazil-carmo-de-minas.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="starbucks $0-$10 medium drip blend col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Pike Place Blend</h3><h5>by Starbucks</h5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                
                <hr>
				<a href="profile.php"><img src="images/pike-place.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="tullys dark drip $0-$10 blend col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>House Blend</h3><h5>by Tully's</h5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/house-blend.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="victrola light africa drip espresso $10-$15 single-origin col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Ethiopia Sidamo</h3><h5>by Victrola Coffee Roasters</h5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/ethiopia-sidamo.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
		<div class="stumptown medium blend drip $15-$20 espresso col-md-3">
                <div class="overview">
                
                <div class="review">
                <a href="profile.php"><h3>Holler Mountain Blend</h3><H5>by Stumptown</H5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                <hr>
				<a href="profile.php"><img src="images/holler-mountain-blend.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="seattle-coffee-works africa $10-$15 single-origin drip light col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Kenya Nyeri Mutwewathi</h3>by Seattle Coffee Works</a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                
                <hr>
				<a href="profile.php"><img src="images/kenya-nyeri-mutwewathi.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="starbucks $0-$10 dark blend espresso col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Veranda Blend</h3><H5>by Starbucks</H5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/veranda-blend.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="starbucks $0-$10 dark blend drip col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>House Blend</h3><h5>by Starbucks</h5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/house-blend-starbucks.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
			<div class="fonte blend col-md-3">
                <div class="overview">
                
                <div class="review">
                <a href="profile.php"><h3>Portofino Blend</h3><H5>by Fonte Coffee Roasters</H5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                <hr>
				<a href="profile.php"><img src="images/portofino-blend.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="victrola blend col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Holiday Blend</h3><h5>by Victrola Coffee</h5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                
                <hr>
				<a href="profile.php"><img src="images/holiday-blend.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="starbucks $0-$10 dark espresso blend col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Perugia Blend</h3><h5>by Starbucks</h5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/perugia-blend.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="starbucks trending $0-$10 dark espresso blend col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Cafa Estima Blend</h3><h5>by Starbucks</h5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
                <a href="profile.php"><img src="images/cafe-estima.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>           
</div> <!--End mainbean-->
</div> <!--End container-->

</section>

<!--footer -->
<footer class="foooter">
<div class="container">
    <div class="col-md-4 copy"><p>Copyright &copy;2015</p></div> 
    
        <div class="col-md-4 social"> 

<a href="#" class="btn btn-social-icon btn-instagram"> <i class="fa fa-instagram"></i></a>

<a href="#" class="btn btn-social-icon btn-facebook"> <i class="fa fa-facebook"></i></a>

</div>
    
    <div class="col-md-4"><p>Webdesign by Kangaroo</p></div>

</footer>
    <script>
        $(document).ready(function() {
            $('ul.filter-function a').click(function() {
              $(this).css('outline','none');
              $('ul.filter-function .current').removeClass('current');
              $(this).parent().addClass('current');

              var filterVal = $(this).text().toLowerCase().replace(' ','-');

              if(filterVal == 'all') {
                $('div.mainbean div.col-md-3.hidden').fadeIn('slow').removeClass('hidden');
              } else {
                $('div.mainbean div.col-md-3').each(function() {
                  if(!$(this).hasClass(filterVal)) {
                    $(this).fadeOut('normal').addClass('hidden');
                  } else {
                    $(this).fadeIn('slow').removeClass('hidden');
                  }
                });
              }

              return false;
            });
          });
    </script>
</body>
</html>

