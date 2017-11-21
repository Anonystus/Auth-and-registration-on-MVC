<html>
<head>
<title>Article's wathcing</title>
</head>
<body>
<?php
echo "Title is ".$title."<br>"."ID id is ".$id."<br>"."content: "."<br>".$content."<br>";
?>
<a href="/news/change/<?php echo $id; ?>">You can change this article</a>
</body>
</html>