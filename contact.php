<?php
$title = 'Coffeedigger | Contact';
include('includes/header.php');
?>

<section class="text-center contact">

<h1>Contact Us</h1>

</section>


<div class="contactbody">

 <section class="contact-form col-md-8 col-sm-12">
 
  
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<label class="contact-lable"><h3>Name</h3></label> <input class="contact-input" type="text" name="name"><br>
<label class="contact-lable"><h3>Email</h3></label> <input class="contact-input" type="email" name="email" size="35"><br>
<label class="contact-lable"><h3>Message</h3></label><textarea name="message" rows="10" cols="60"></textarea> <br>  

<div class="btn-group btn-group-lg" role="group" aria-label="...">
<button type="submit" class="btn btn-default contact-submit">Submit</button>
</div>
</form>

</section>



<aside class="contact col-md-4">
<?php include 'includes/aside.php' ?>
</aside>


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

</div>

<?php
include('includes/footer.php');
?>

