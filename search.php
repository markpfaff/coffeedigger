<?php
//coffeedigger search page
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
                          <input type="text" class="form-control" placeholder="Search" name="coffee" id="srch-term">
                            <div class="input-group-btn">
                                 <button class="btn btn-default" type="submit" value="search"><span class="glyphicon glyphicon-search"></span></button>

                           </div>
                     </div>
                   </form>
        
</div>                   
</div>    

</div>    
</header>



<!--section -->
<section>
    <?php
    echo "<h3>Results:</h3>";
    if (empty($_GET['term']) === false){
        $search_results = search_posts($_GET['term']);

        if (empty($search_results)){
            echo 'Your search returned no results.';
            }

            foreach ($search_results as $result){
                $string = preg_replace('/\s+/', '', $result['title']);
                echo "<a href='{$string}-profile.php'> <h4>{$result['title']}</h4></a>";
                }
        }
    ?>
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

