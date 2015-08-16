<?php
include('includes/config.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title><?php echo $title?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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
<div class="col-md-4 col-sm-4 col-xs-12 about">
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


<div class="col-md-4 col-sm-4 col-xs-12 search">

<div class="from-group search">

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

