<?php
require_once 'core/init.php';

if(Session::exists('home')) {
	//echo '<p>' . Session::flash('home') . '</p>';
}
?>

<!DOCTYPE html>
<head>
	<title>CodeCollab</title>
	<meta charset="utf-8">
	<link rel="stylesheep" type="text/css" media="all" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/styles.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
<?php require_once 'includes/navigation.php'; ?>
<div id="content" class="clearfix">
	<div class="lcol">
		<h1>CodeCollab Home Page</h1>
		<br /><br />
		<h3><a href="post.php?p=999">Post title for postId: 999</a></h3>
		<p style="font-style: italic;">Author: username1</p>
		<hr />
		<h3><a href="post.php?p=998">Post title for postId: 998</a></h3>
		<p style="font-style: italic;">Author: username2</p>
		<hr />
		<h3><a href="post.php?p=997">Post title for postId: 997</a></h3>
		<p style="font-style: italic;">Author: username3</p>
		<hr />
		<h3><a href="post.php?p=996">Post title for postId: 996</a></h3>
		<p style="font-style: italic;">Author: username4</p>
		<hr />
		<h3><a href="post.php?p=995">Post title for postId: 995</a></h3>
		<p style="font-style: italic;">Author: username5</p>
		<hr />
		<h3><a href="post.php?p=994">Post title for postId: 994</a></h3>
		<p style="font-style: italic;">Author: username6</p>
		<hr />
		<h3><a href="post.php?p=993">Post title for postId: 993</a></h3>
		<p style="font-style: italic;">Author: username7</p>
		<hr />
		<h3><a href="post.php?p=992">Post title for postId: 992</a></h3>
		<p style="font-style: italic;">Author: username8</p>
		<hr />
	</div>
	<div class="rcol">
		<?php require_once 'includes/searchbar.php'; ?>
	</div>
</div>
</body>
</html>