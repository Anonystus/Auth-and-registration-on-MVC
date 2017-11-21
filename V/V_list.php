<?php 

echo "You can change something";

?>
<html>
<head>
<title>List of articles</title>
</head>

<body>
<?php
foreach($ans as $k){
	echo "<br>"."<br>"."<br>"."ID is ".$k['id']."<br>"."Title is ".$k['title']."<br>"."Content is ".$k['content']."<br>";
?>

<a href="/news/watch/<?php echo $k['id']; ?>">You can watch it</a>
<?php } ?>
</body>

</html>