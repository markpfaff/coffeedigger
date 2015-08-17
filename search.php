<?php
//coffeedigger search page
include('includes/header.php');
$title = 'Coffeedigger | Search';
?>

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

include('includes/footer.php');
?>

