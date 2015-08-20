<?php
//coffeedigger profile page
$title = 'Coffeedigger | Profile ';
include('includes/header.php');
?>

<!--BAR WITH GO BACK MENU-->
<div class="form-group filter">

    <!--<div class="col-md-4 "><h1><< Back to Dig</h1></div>-->
    <div class="col-md-4 "><a href="index.php"><h1><< Back to Dig</h1></a></div>
<!--    <div class="col-md-4 copy"><h2>Coffee </h2></div>-->
        
</div>

  <!--ENDS BAR WITH GO BACK MENU-->  
    

<!--section -->
<section>
<!--Container for grid-->
<div class="container">

<!--BEGINS CONTENT-LEFT-->
    <section id="content">
            <img src="images/veranda-blend.jpg" class="content" alt="profile-image-coffee1" >
                      
            <div class="profile-overview">
                    <div class="profile-review">
                        <h3>Availability</h3>
                    </div>
                    
                <hr class="profile">
                
                <div id="icon-coffee-left">
                	<img src="images/logos/starbucks.png" class="coffee-logo" alt="profile-image-coffee1" >
                </div>
                
                <div id="description-coffee-left">
                
                	<h1 class="profile-h1">Coffee Tree</h1>
                
                <div class="profile-p">
                    <p>Address: Lorem ipsum dolor sit amet.</p>
                    </div>
                 </div>
              </div>
              
              
              
              <div class="profile-overview">
                            
                <div id="icon-coffee-left">
                	<img src="images/logos/tullys-coffee.png" class="coffee-logo" alt="profile-image-coffee1" >
                </div>
                
                <div id="description-coffee-left">
                
                	<h1 class="profile-h1">The Coffee Bean</h1>
                
                <div class="profile-p">
                    <p>Address: Lorem ipsum dolor sit amet.</p>
                    </div>
                 </div>
              </div>
              
              
              <div class="profile-overview">
                            
                <div id="icon-coffee-left">
                	<img src="images/logos/the-coffee.png" class="coffee-logo" alt="profile-image-coffee1" >
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
                	<img src="images/logos/cost-coffe.png" class="coffee-logo" alt="profile-image-coffee1" >
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
                        <h3>Veranda Blend</h3>
                        <div class="dig-container">
                            <p class="dig-score">
                                            <?php
                                            $sql = mysql_query("SELECT * FROM coffee WHERE ID = '14'") or die(mysql_error());
                                            while($row = mysql_fetch_assoc($sql)){
                                                 echo $row['digs'];
                                                    }
                                            ?>   
                            </p>
                            <form id="form_members" role="form" action="send_veranda.php" method="POST">
                                   <button class="dig" type="submit" name="digs" value="Submit" >
                                       <img class="button-dig" src="images/shovel.png" alt="Submit">Dig
                                   </button>
                            </form>                            
                        </div>      
                       
                    </div>
                 
                <hr class="profile">
                <div class="profile-p">
                    <p><h1 class="profile-h1">Roaster:</h1> Starbucks </p>
                    <p><h1 class="profile-h1">Type:</h1> Blend </p>
                    <p><h1 class="profile-h1">Roast:</h1> Medium </p>
                    <p><h1 class="profile-h1">Region:</h1> Latin America </p>
                    <p><h1 class="profile-h1">Price:</h1> $12.99</p>
                    <p><h1 class="profile-h1">Trending:</h1> Blonde </p>
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
                    <p>Black aftertaste beans medium, mocha ristretto redeye milk ut cappuccino. Robust dark, skinny eu viennese white coffee foam.</p>
                    <p>Con panna saucer iced, siphon viennese et galão white grinder. Sit at, mazagran café au lait percolator robusta as java spoon robusta brewed dripper.</p>
                    
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
include('includes/config.php'); 
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
                    url: "includes/add-comment.php",
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
            <img src="images/grains-coffee1.jpg" class="aside-box" alt="user-image" >

	</aside>
    
    <aside class="inner-aside">
        <h2>POPULAR Bean!</h2>
        <img src="images/grains-coffee2.jpg" class="aside-box" alt="user-image" >
      
    </aside>
    
    <aside class="inner-aside-2">
    <h2>Newsletter Sign-up</h2>
    
            <form action="includes/form.php" id="form-style" method="post"> 
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
<?php
function search_posts($term){
	$keywords = preg_split('#\s+#', mysql_real_escape_string($term));
	
	/*print_r($keywords);*/	
	
	$title_where = "`name` LIKE '%" . implode("%' OR `post_title` LIKE '%", $keywords) . "%'";
	
	$sql = "SELECT `name` AS `title` FROM `coffee` WHERE {$title_where}";
	
	$result = mysql_query($sql);
	
	$results = array();
	
	while (($row = mysql_fetch_Assoc($result)) !== false){
	$results[] = $row;	
	}
	
	return $results;
	
}
?>
<?php include('includes/footer.php');
?>