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

<form class="navbar-form searchbox" role="search">
                     <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search" name="term" id="srch-term">
                            <div class="input-group-btn">
                                 <button class="btn btn-default" type="submit" value="search"><span class="glyphicon glyphicon-search"></span></button>
                    <?php
                    if (empty($_GET['term']) === false){
                        $search_results = search_posts($_GET['term']);

                        if (empty($search_results)){
                            echo 'Your search returned no results.';
                            }

                            foreach ($search_results as $result){
                                echo "<h3>Results:</h3>";
                                echo "<h4>{$result['title']}</h4>";
                                }
                        }
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
                    <a href="profile.php"><h3>Coffee1</h3></a>
                    <img src="images/shovel.png" alt="shovel" >
                    <p>123</p>
                </div>
                    
                <hr>
                <a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Coffee2</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Coffee3</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Coffee4</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
		</div> <!--End container for Row-->
        
        <div class="row">
			<div class="col-md-3">
                <div class="overview">
                
                <div class="review">
                <a href="profile.php"><h3>Coffee5</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Coffee6</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Coffee7</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Coffee8</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
		</div> <!--End container for Row-->
        
        <div class="row">
			<div class="col-md-3">
                <div class="overview">
                
                <div class="review">
                <a href="profile.php"><h3>Coffee9</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Coffee10</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Coffee11</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Coffee12</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
		</div> <!--End container for Row-->
        
           <div class="row">
			<div class="col-md-3">
                <div class="overview">
                
                <div class="review">
                <a href="profile.php"><h3>Coffee13</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Coffee14</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Coffee15</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="col-md-3">
                <div class="overview">
				
                <div class="review">
                <a href="profile.php"><h3>Coffee16</h3></a>
                <img src="images/shovel.png" alt="shovel" >
                <p>123</p>
                </div>
                    
                    
                <hr>
                <a href="profile.php"><img src="images/bean1.jpg" class="img-rounded" alt="images for shops" ></a>
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

