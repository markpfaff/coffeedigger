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
