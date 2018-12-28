<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Blog</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h1>Mon Super Blog !</h1>
		<p><a href="">Les derniers billets du blog</a></p>
		
		
		<?php
		while($data = $q->fetch())
		{
		?>
		
			<div class="news">
				<h3>
					<?php echo htmlspecialchars($data['title']);?> 
					<em>le <?php echo $data['creation_date']; ?></em>
				</h3>
				<p>
					<?php echo nl2br(htmlspecialchars($data['content'])); ?><br>
					<a href="">Commentaires</a>
				</p>
			 </div>
		<?php
		}
		$q->closeCursor();
?>		
		     
	</body>
</html>