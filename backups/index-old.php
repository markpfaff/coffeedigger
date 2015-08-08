<?php
//coffeedigger home page
include('includes/config.php');
?>	
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
          <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/example.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      
    <style>
        header {
            background-color:#dccccc;
            color:white;
            text-align:center;
            padding:5px;	 
        }
        nav {
            line-height:30px;
            background-color:#eeeeee;
            height:360px;
            width:120px;
            float:left;
            padding:5px;	      
        }
        section {
            width:350px;
            float:left;
            padding:10px;	 	 
        }
        footer {
            background-color:black;
            color:white;
            clear:both;
            text-align:center;
            padding:5px;	 	 
        }
        ul{
            list-style-type:none;

        }

        /*unvisited link*/
        a{text-decoration:none;}
        a  {
            color:#003;
        }
        /*visited link*/
        a {
            color:#999;

        }
        /*mouse over link*/
        a:hover{
            color:#FF0;
        ;
        }
        /*selected link*/
        a:active{
            color:#F33;

        }
    </style>
</head>

    <body>
        <!--header -->
        <header>
        <div class="logo"><a href="index.html"><img class="icon" alt="" src="images/coffeedigger2.png" title="link back to main page"></a></div>
        </header>

        <!--navigation -->
        <nav>
        <ul>
            <li class ='active'><a href="#">Home</a></li>
            <li class ='active'><a href="#">Groups</a></li>
            <li class ='active'><a href="#">Contact Us</a></li>
         </ul>

        </nav>

        <!--section -->
        <section>
            <h1>HA HA</h1>
            <img src ="images/kangaroo.jpg" alt=""/>
            <hr />
            <h2>Dig it!</h2>
            <form class="form-horizontal" id="form_members" role="form" action="send_formdata_coffees.php" method="POST">
                    <h3>Awesome Coffee</h3>

                    <h4>
                        <?php 
                        while($row = mysqli_fetch_array($result))
                        {
                        echo $row['digs'];
                        }
                        mysqli_close($con);
                        ?> Digs!
                    </h4>    

                        <input type="submit" class="form-control" name="digs" value="Dig It!">

            </form>
            <hr />
            <h2>Comments!</h2>
            <div class="cmt-container" >
                <?php
		$id_post = "1"; //the post or the page id; 
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
            <div>
              <h2>Search Box!</h2>
              <form action="" method="get">
                  <p>
                      <input type="text" name="term"/>
                      <input type="submit" value="search"/>
                  </p>
              </form>
            </div>

            <div>

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
        
        </section>

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

        <!--footer -->
        <footer>
        Copyright &copy; kangaroo 
        </footer>

    </body>
</html>
