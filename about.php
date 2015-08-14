<?php
//coffeedigger about page
include('includes/header.php');
$title = 'Coffeedigger | About';
?>
   
<section>
<!--Container for grid-->
<div class="container">

<!--Images for groups-->
	<div class="mainbean">

    
        <div class="row">
   
            <div class="col-md-12">
                <div class="overview">
                  <h3 class="about">About Us</h3>
							<div class="about-pic">
								<img alt="image for about page" class="about" src="images/cup.jpg">  
							</div>
                  <hr>
				  
				 <div class="about-info">
					<div class="about-headings">Our Mission</div>
						<p>Coffeedigger's mission is to provide a more detail oriented convenient search option for coffee. Our site will allow users to not just search for coffee, it will allow users to filter their searches as well gibing them more in depth seaching capabilities.</p>

					<div class="about-headings">The Team</div>
					<p>The website was built by a webteam of 6 skilled individuals that all had their own skills to contribute to the building of the website.  These are the individuals who worked on building the site.</p>
					
					<ul class="about-lists">
						<li class="bold">Sunny Eun</li>
						<li>Design Head</li>
						<li class="bold">Luis Gamboa</li>
						<li>Slacker</li>
						<li class="bold">Wan</li>
						<li>Tech Lead</li>
						<li class="bold">Mark Pfaff</li>
						<li>Project Manager</li>
						<li class="bold">Bo Zhang</li> 
						<li>Architect</li>
						<li class="bold">Andy Davis</li>
						<li>Scrum Master</li>
					</ul>
			
                  <hr>
				<blockquote><q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend.</q></blockquote>  
				</div>
              </div>   
			</div>
		</div> <!--End container for Row-->    
	</div> <!--End container for images-->
</div> <!--End container-->

</section>

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
include('includes/footer.php');
?>
