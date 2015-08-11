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
 
//	  if(isset($_GET['name'])){ 
//	  if(preg_match("/^[  a-zA-Z]+/", $_GET['name'])){ 
//        $name=$_GET['name']; 
//        //connect  to the database 
//  	  $db=mysql_connect  ("mysql.markpfaff.com", "mp_coffeedigger",  "kanga#roo") or die ('I cannot connect to the database  because: ' . mysql_error()); 
//        //-select  the database to use 
//  	  $mydb=mysql_select_db("mp_coffeediggerdb"); 
//        //-query  the database table 
//        $sql="SELECT  ID, name, digs FROM coffee WHERE name LIKE '%" . $name .  "%' "; 
//        //-run  the query against the mysql query function 
//        $result=mysql_query($sql); 
//        //-create  while loop and loop through result set 
//        while($row=mysql_fetch_array($result)){ 
//            $name =$row['name']; 
//            $digs =$row['digs']; 
//            $ID=$row['ID']; 
//            //-display the result of the array 
//            echo "<ul>\n"; 
//            echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$name . " " . $digs .  "</a></li>\n"; 
//            echo "</ul>"; 
//            } 
//      }else{ 
//        echo  "<p>Please enter a search query</p>"; 
//      } 
//	  } 
 
                    if (empty($_GET['term']) === false){
                        $search_results = search_posts($_GET['term']);

                        if (empty($search_results)){
                            echo 'Your search returned no results.';
                            }

                            foreach ($search_results as $result){
                                $string = preg_replace('/\s+/', '', $result['title']);
                                echo "<h3>Results:</h3>";
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

