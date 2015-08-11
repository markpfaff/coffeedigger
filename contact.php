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
                          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                            <div class="input-group-btn">
                                 <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                           </div>
                     </div>
                   </form>
                   
       

        
</div>                   
</div>    

</div>    
</header>

<section class="text-center contact">

<h1>Contact Us</h1>

</section>
 
 
 

 <section class="contact-form col-md-8">
 
  
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<label class="contact-lable"><h3>Name</h3></label> <input class="contact-input" type="text" name="name"><br>
<label class="contact-lable"><h3>Email</h3></label> <input class="contact-input" type="email" name="email" size="35"><br>
<label class="contact-lable"><h3>Message</h3></label><textarea name="message" rows="10" cols="60"></textarea> <br>  

<div class="btn-group btn-group-lg" role="group" aria-label="...">
<button type="submit" class="btn btn-default contact-submit">Submit</button>
</div>
</form>

</section>



<div class="col-md-4">
<?php include 'includes/aside.php' ?>
</div>


<div class="thankyou col-md-8">
 
<?php
include 'includes/config.php';

if (empty($a) === false && empty($b) === false && empty($c) === false) {
 
if (filter_var($b, FILTER_VALIDATE_EMAIL)) {

 $message = "Name: ".$a."\n"."Email: ".$b."\n"."Message: ".$c;
 $headers = "From: bozhang@happytravelmug.com";
  
 mail("bozhang@happytravelmug.com", "Customer Input", $message, $headers);

 mail($b, "Thank You!", "Thank you for your submition, ".$a."!", $headers);

 mysql_query("INSERT INTO message (name, email, message)VALUES( '$a', '$b', '$c')");

echo "<h4>Your message has been sucessfuly submitted. We will try to get back to you within 48 hours. Thank you!</h4>";
 

}
 else	{
	 echo "Please make sure your email is validate";
}
}

?>
   
</div> 


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

