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
                    <?php
//                    if (empty($_GET['term']) === false){
//                        $search_results = search_posts($_GET['term']);
//
//                        if (empty($search_results)){
//                            echo 'Your search returned no results.';
//                            }
//
//                            foreach ($search_results as $result){
//                                echo "<h3>Results:</h3>";
//                                echo "<h4>{$result['title']}</h4>";
//                                }
//                        }
                		?>
                           </div>
                     </div>
                   </form>
        
</div>                   
</div>    

</div>    
</header>


    
    
<div class="form-group filter">

<label for="filter">Sort By:</label>
<select class="form-control">
  <option value="">Brand</option>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
  
<select class="form-control">
  <option value="">Type</option>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>    
 
<select class="form-control">
  <option value="">Flavor</option>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>   

<select class="form-control">
  <option value="">Price</option>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
    
<select class="form-control">
  <option value="">Popularity</option>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>    

<button class="btn btn-default filtergo" type="submit">Go</button>


        
</div>



<!--section -->
<section>
<!--Container for grid-->
<div class="container">

<!--Images for groups-->
	<div class="mainbean">

        
        <div class="row">
			<div class="col-md-3">
                <div class="overview">
                
                <div class="review">
                    <a href="profile.php"><h3>Indonesia Bies Penantan</h3><h5>by Stumptown</h5></a>
                    <img src="images/shovel.png" alt="shovel" >
                    <p>123</p>
                </div>
                    
                <hr>
                <a href="profile.php"><img src="images/indonesia-sulawesi.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="col-md-3">
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
			
            <div class="col-md-3">
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
			
            <div class="col-md-3">
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
			
		</div> <!--End container for Row-->
        
        <div class="row">
			<div class="col-md-3">
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
			
            <div class="col-md-3">
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
			
            <div class="col-md-3">
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
			
            <div class="col-md-3">
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
			
		</div> <!--End container for Row-->
        
        <div class="row">
			<div class="col-md-3">
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
			
            <div class="col-md-3">
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
			
            <div class="col-md-3">
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
			
            <div class="col-md-3">
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
			
		</div> <!--End container for Row-->
        
           <div class="row">
			<div class="col-md-3">
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
			
            <div class="col-md-3">
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
			
            <div class="col-md-3">
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
			
            <div class="col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Cafè Estima Blend</h3><h5>by Starbucks</h5></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
                <a href="profile.php"><img src="images/cafe-estima.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
		</div> <!--End container for Row-->

        
	</div> <!--End container for images-->
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

</body>
</html>

