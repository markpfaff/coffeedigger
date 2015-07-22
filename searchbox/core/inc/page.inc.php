<?php

function search_post($term){
	$keywords = preg_split('#\s+#', mysql_real_escape_string($term));
	
	/*print_r($keywords);*/	
	
	$title_where = "`post_title` LIKE '%" . implode("%' OR `post_title` LIKE '%", $keywords) . "%'";
	$body_where = "`post_body` LIKE '%" . implode("%' OR `post_body` LIKE '%", $keywords) . "%'";
	
	$sql = "SELECT
		`post_title` AS `title`,
		LEFT(`post_body`, 100) AS `body`
	FROM `posts`;
	WHERE {$title_where}
	OR {$body_where}";
	
	$result = mysql_query($sql);
	
	$results = array();
	
	while (($row = mysql_fetch_Assoc($result)) !== false){
	$results[] = $row;	
	}
	
	return $results;
	
	

}

?>