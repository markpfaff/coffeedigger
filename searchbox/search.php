<?php

include('core/init.inc.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<div>
	<h1>Search Box</h1>
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
					echo "<h3>{$result['title']}</h3>";
					echo "<p>{$result['body']}</p>";
					}
			}
    ?>

</div>

</body>
</html>