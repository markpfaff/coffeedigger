<?php
//coffeedigger home page
include('includes/header.php');
$title = 'Coffeedigger | Home';
include('includes/config.php');

//while($mysqldigs = mysql_fetch_assoc($sql)){ 
//    $digs = $mysqldigs['digs'];




?>

 
    <div class="filter">

    <ul class="filter-function">
      <li class="current"><a href="#">All</a></li>
      <li><span class="filter-title">Roaster</span>
            <ul class="filter-function">
                <li><a href="#">Stumptown</a></li>
                <li><a href="#">Caffe Vita</a></li>
                <li><a href="#">Tullys</a></li>
                <li><a href="#">Starbucks</a></li>
                <li><a href="#">Victrola</a></li>
                <li><a href="#">Fonte</a></li>
                <li><a href="#">Seattle Coffee Works</a></li>
                <li><a href="#">Herkimer</a></li>
            </ul>
      </li>
      <li><span class="filter-title">Type</span>
            <ul class="filter-function">
                <li><a href="#">Espresso</a></li>
                <li><a href="#">Drip</a></li>
                <li><a href="#">Decaf</a></li>
                <li><a href="#">Blend</a></li>
                <li><a href="#">Single Origin</a></li>
            </ul>
      </li>
      <li><span class="filter-title">Roast</span>
            <ul class="filter-function">
                <li><a href="#">Light</a></li>
                <li><a href="#">Medium</a></li>
                <li><a href="#">Dark</a></li>
            </ul>
      </li>
      <li><span class="filter-title">Region</span>
            <ul class="filter-function">
                <li><a href="#">Africa</a></li>
                <li><a href="#">Indonesia</a></li>
                <li><a href="#">Latin America</a></li>
            </ul>
      </li>
      <li><span class="filter-title">Price</span>
            <ul class="filter-function">
                <li><a href="#">$0-$10</a></li>
                <li><a href="#">$10-$15</a></li>
                <li><a href="#">$15-$20</a></li>
                <li><a href="#">$20-</a></li>
            </ul>
      </li>
      <li><a href="#">Trending</a></li>
    </ul>

        
</div><!--end div class filter -->



<!--section -->
<section>
<!--Container for grid-->
<div class="container">
<div class="mainbean">
		<div class="stumptown indonesia trending $10-$15 light single-origin drip col-md-3">
                <div class="overview">
                
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>Indonesia Bies Penantan</h3><h5>by Stumptown</h5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                        
                        <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '2'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?> 
                            
                        </p>
                    </div>
                </div>
                    
                <hr>
                <a href="profile.php"><img src="images/indonesia-sulawesi.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>    
          <div class="herkimer light africa trending $20- single-origin drip col-md-3">
                <div class="overview">
				
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>Kenya Ngunguru</h3><h5>by Herkimer</h5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                        <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '3'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?> 
                        </p>
                    </div>    
                </div>
                
                <hr>
				<a href="profile.php"><img src="images/kenya-ngunguru.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
            <div class="caffe-vita medium africa $20- single-origin drip col-md-3">
                <div class="overview">
				
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>Kenya Kiamabara</h3><h5>by Caffe Vita</h5></a>
                     </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                        <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '5'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?> 
                        </p>
                    </div>    
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/kenya-kiamabara.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
            <div class="fonte dark drip blend $10-$15 col-md-3">
                <div class="overview">
				
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>French Roast</h3><H5>by Fonte Coffee Roasters</H5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                        <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '6'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?>                             
                        </p>
                    </div>    
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/french-roast.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			<div class="seattle-coffee-works trending latin-america $10-$15 single-origin medium drip espresso col-md-3">
                <div class="overview">
                
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>Brazil Carmo de Minas</h3><h5>by Seattle Coffee Works</h5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                        <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '7'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?>                             
                        </p>
                    </div>
                </div>
                    
                <hr>
				<a href="profile.php"><img src="images/brazil-carmo-de-minas.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="starbucks $0-$10 medium drip blend col-md-3">
                <div class="overview">
				
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>Pike Place Blend</h3><h5>by Starbucks</h5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                        <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '8'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?>                                  
                        </p>
                    </div>
                </div>
                
                <hr>
				<a href="profile.php"><img src="images/pike-place.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="tullys dark drip $0-$10 blend col-md-3">
                <div class="overview">
				
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>House Blend</h3><h5>by Tully's</h5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                        <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '9'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?>                                 
                        </p>
                    </div>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/house-blend.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="victrola light africa drip espresso $10-$15 single-origin col-md-3">
                <div class="overview">
				
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>Ethiopia Sidamo</h3><h5>by Victrola Coffee Roasters</h5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                        <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '10'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?>                                    
                        </p>
                    </div>    
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/ethiopia-sidamo.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
		<div class="stumptown medium blend drip $15-$20 espresso col-md-3">
                <div class="overview">
                
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>Holler Mountain Blend</h3><H5>by Stumptown</H5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                        <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '12'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?>                               
                        </p>
                    </div>
                </div>
                    
                <hr>
				<a href="profile.php"><img src="images/holler-mountain-blend.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="seattle-coffee-works africa $10-$15 single-origin drip light col-md-3">
                <div class="overview">
				
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>Kenya Nyeri Mutwewathi</h3>by Seattle Coffee Works</a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                        <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '13'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?>                           
                        </p>
                    </div>    
                </div>
                
                <hr>
				<a href="profile.php"><img src="images/kenya-nyeri-mutwewathi.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="starbucks $0-$10 dark blend espresso col-md-3">
                <div class="overview">
				
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>Veranda Blend</h3><H5>by Starbucks</H5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                        <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '14'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?>                               
                        </p>
                    </div>                      
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/veranda-blend.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="starbucks $0-$10 dark blend drip col-md-3">
                <div class="overview">
				
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>House Blend</h3><h5>by Starbucks</h5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                         <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '15'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?>                              
                        </p>
                    </div>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/house-blend-starbucks.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
			<div class="fonte blend col-md-3">
                <div class="overview">
                
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>Portofino Blend</h3><H5>by Fonte Coffee Roasters</H5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                         <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '16'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?>                                
                        </p>
                    </div>
                </div>
                    
                <hr>
				<a href="profile.php"><img src="images/portofino-blend.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="victrola blend col-md-3">
                <div class="overview">
				
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>Holiday Blend</h3><h5>by Victrola Coffee</h5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                         <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '17'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?>                                   
                        </p>
                    </div>
                </div>
                
                <hr>
				<a href="profile.php"><img src="images/holiday-blend.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="starbucks $0-$10 dark espresso blend col-md-3">
                <div class="overview">
				
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>Perugia Blend</h3><h5>by Starbucks</h5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                         <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '18'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?>                                  
                        </p>
                    </div>
                </div>
                    
                    
                <hr>
				<a href="profile.php"><img src="images/perugia-blend.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>
			
            <div class="starbucks trending $0-$10 dark espresso blend col-md-3">
                <div class="overview">
				
                <div class="review">
                    <div class="profile-title">
                        <a href="profile.php"><h3>Cafa Estima Blend</h3><h5>by Starbucks</h5></a>
                    </div>
                    <div class="dig-count">
                        <img src="images/shovel.png" alt="shovel" >
                        <p>
                         <?php
                        $sql = mysql_query("SELECT * FROM coffee WHERE ID = '19'") or die(mysql_error());
                        while($row = mysql_fetch_assoc($sql)){
                             echo $row['digs'];
                                }
                        ?>                              
                        </p>
                    </div>
                </div>
                    
                    
                <hr>
                <a href="profile.php"><img src="images/cafe-estima.jpg" class="img-rounded" alt="images for shops" ></a>
                </div>
			</div>           
</div> <!--End mainbean-->
</div> <!--End container-->

</section>

<?php
include('includes/footer.php');
?>