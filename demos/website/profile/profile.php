<!DOCTYPE html>
<html>

<head>
	<title>CoffeeDigger Profile</title>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link type="text/css" rel="stylesheet" href="comment/css/style.css">
    <link type="text/css" rel="stylesheet" href="comment/css/example.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>.
    
	
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
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        </nav>
    </div>    
        
    <div class="logo col-md-4">
            <a href="index.php"><img class="icon" alt="logo" src="img/logo.png" title="link back to main page"></a>
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
<!--ENDS HEADER-->

<!--BAR WITH GO BACK MENU-->
<div class="form-group filter">

    <!--<div class="col-md-4 "><h1><< Back to Dig</h1></div>-->
    <div class="col-md-4 "><a href="http://lgamboa.com/website-coffedigger2/index.php"><h1><< Back to Dig</h1></a></div>
    <div class="col-md-4 copy"><h2>Coffee </h2></div>
        
</div>

  <!--ENDS BAR WITH GO BACK MENU-->  
    

<!--section -->
<section>
<!--Container for grid-->
<div class="container">

<!--BEGINS CONTENT-LEFT-->
    <section id="content">
            <img src="img/profile-coffee1.jpg" class="content" alt="profile-image-coffee1" >
                      
            <div class="profile-overview">
                    <div class="profile-review">
                        <h3>Availability</h3>
                    </div>
                    
                <hr class="profile">
                
                <div id="icon-coffee-left">
                	<img src="img/coffee-tree-logo.png" class="coffee-logo" alt="profile-image-coffee1" >
                </div>
                
                <div id="description-coffee-left">
                
                	<h1 class="profile-h1">Coffe Tree</h1>
                
                <div class="profile-p">
                    <p>Address: Lorem ipsum dolor sit amet.</p>
                    </div>
                 </div>
              </div>
              
              
              
              <div class="profile-overview">
                            
                <div id="icon-coffee-left">
                	<img src="img/the-coffee-bean.png" class="coffee-logo" alt="profile-image-coffee1" >
                </div>
                
                <div id="description-coffee-left">
                
                	<h1 class="profile-h1">The Coffe Bean</h1>
                
                <div class="profile-p">
                    <p>Address: Lorem ipsum dolor sit amet.</p>
                    </div>
                 </div>
              </div>
              
              
              <div class="profile-overview">
                            
                <div id="icon-coffee-left">
                	<img src="img/the-coffee.png" class="coffee-logo" alt="profile-image-coffee1" >
                </div>
                
                <div id="description-coffee-left">
                
                	<h1 class="profile-h1">The Coffee</h1>
                
                <div class="profile-p">
                    <p>Address: Lorem ipsum dolor sit amet.</p>
                    </div>
                 </div>
              </div>
              
              
              <div class="profile-overview">
                            
                <div id="icon-coffee-left">
                	<img src="img/the-mortgage-cafe.png" class="coffee-logo" alt="profile-image-coffee1" >
                </div>
                
                <div id="description-coffee-left">
                
                	<h1 class="profile-h1">The Mortgage Cafe</h1>
                
                <div class="profile-p">
                    <p>Address: Lorem ipsum dolor sit amet.</p>
                    </div>
                 </div>
              </div>
              
              
              
              
    </section>
    
    
<!--ENDS CONTENT-LEFT-->


<!--BEGINS MIDDLE	-->
    <section id="middle">
          	<!--COFFEE-->
            <div class="profile-overview">
                    <div class="profile-review">
                        <h3>Coffee1</h3>
                        <img src="img/shovel.png" alt="shovel" >
                        <p>123</p>
                    </div>
                 
                <hr class="profile">
                <div class="profile-p">
                    <p>Brand: Lorem ipsum </p>
                    <p>Type: Lorem ipsum </p>
                    <p>Flavor: Lorem ipsum </p>
                    <p>Price range: $5.00 - 7.00</p>
                </div>
                </div>
                <!--COFFEE ENDS-->
                
             <!--DESCRIPTION-->
             <div class="profile-overview">
                    <div class="profile-review">
                        <h3>Description</h3>
                    </div>
                    
                <hr class="profile">
                <div class="profile-p">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel dui fringillaus i fringil- lauto.</p>
                </div>
              </div>
              <!--DESCRIPTION ENDS-->

				<!--COMMENTS-->
				<div class="profile-overview">
                    <div class="profile-review">
                    	<h3>Comments</h3>
                    </div>
                 
                <hr class="profile">
                    <?php 
// Connect to the database
include('comment/config.php'); 
$id_post = "1"; //the post or the page id
?>
<div class="cmt-container" >
    <?php 
    $sql = mysql_query("SELECT * FROM comment WHERE id_post = '$id_post'") or die(mysql_error());;
    while($affcom = mysql_fetch_assoc($sql)){ 
        $name = $affcom['name'];
        $email = $affcom['email'];
        $comment = $affcom['comment'];
        $date = $affcom['date'];

        // Get gravatar Image 
        // https://fr.gravatar.com/site/implement/images/php/
        $default = "mm";
        $size = 35;
        $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;

    ?>
    <div class="cmt-cnt">
        <img src="<?php echo $grav_url; ?>" />
        <div class="thecom">
            <h5><?php echo $name; ?></h5><span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
            <br/>
            <p>
                <?php echo $comment; ?>
            </p>
        </div>
    </div><!-- end "cmt-cnt" -->
    <?php } ?>
 	
    <div class="profile-overview">
        <div class="profile-review">
        	<h3>Leave a Comment</h3>
        </div>
    <hr class="profile">

    </div>

    <div class="new-com-bt">
        <span>Write a comment ...</span>
    </div>
    <div class="new-com-cnt">
        <input type="text" id="name-com" name="name-com" value="" placeholder="Your name" />
        <input type="text" id="mail-com" name="mail-com" value="" placeholder="Your e-mail adress" />
        <textarea class="the-new-com"></textarea>
        <div class="bt-add-com">Post comment</div>
        <div class="bt-cancel-com">Cancel</div>
    </div>
    <div class="clear"></div>
</div><!-- end of comments container "cmt-container" -->


<script type="text/javascript">
   $(function(){ 
        //alert(event.timeStamp);
        $('.new-com-bt').click(function(event){    
            $(this).hide();
            $('.new-com-cnt').show();
            $('#name-com').focus();
        });

        /* when start writing the comment activate the "add" button */
        $('.the-new-com').bind('input propertychange', function() {
           $(".bt-add-com").css({opacity:0.6});
           var checklength = $(this).val().length;
           if(checklength){ $(".bt-add-com").css({opacity:1}); }
        });

        /* on clic  on the cancel button */
        $('.bt-cancel-com').click(function(){
            $('.the-new-com').val('');
            $('.new-com-cnt').fadeOut('fast', function(){
                $('.new-com-bt').fadeIn('fast');
            });
        });

        // on post comment click 
        $('.bt-add-com').click(function(){
            var theCom = $('.the-new-com');
            var theName = $('#name-com');
            var theMail = $('#mail-com');

            if( !theCom.val()){ 
                alert('You need to write a comment!'); 
            }else{ 
                $.ajax({
                    type: "POST",
                    url: "comment/ajax/add-comment.php",
                    data: 'act=add-com&id_post='+<?php echo $id_post; ?>+'&name='+theName.val()+'&email='+theMail.val()+'&comment='+theCom.val(),
                    success: function(html){
                        theCom.val('');
                        theMail.val('');
                        theName.val('');
                        $('.new-com-cnt').hide('fast', function(){
                            $('.new-com-bt').show('fast');
                            $('.new-com-bt').before(html);  
                        })
                    }  
                });
            }
        });

    });
</script>
                
                </div>
                <!--COMMENTS ENDS-->
     
        </section>

<!--ENDS MIDDLE-->
    
    
<!--BEGINS SIDEBAR-->
<div id="right-sidebar" class="sidebar">
    <aside class="inner-aside">
    		<h2>LATEST Bean!</h2>
            <img src="img/grains-coffee1.jpg" class="aside-box" alt="user-image" >

	</aside>
    
    <aside class="inner-aside">
        <h2>POPULAR Bean!</h2>
        <img src="img/grains-coffee2.jpg" class="aside-box" alt="user-image" >
      
    </aside>
    
    <aside class="inner-aside-2">
    <h2>Newsletter Sign-up</h2>
    
            <form action="form.php" id="form-style" method="post"> 
        	<div>
                <label class="newsletter-1">
                	<input type="text" id="name-sub" name="name" value="" placeholder="Name">
                </label>
                
                <label class="newsletter-1">
                	<input type="text" id="name-sub" name="email" value="" placeholder="E-mail">
                </label>
                
                <button type="submit" id="submit-sub" value="Submit">Submit</button>
        	</div>
		</form> 

    </aside>
    
    </div>
<!--ENDS SIDEBAR-->
    

</div> 
<!--End container-->

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

