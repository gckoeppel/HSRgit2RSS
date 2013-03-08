<!DOCTYPE html>
<html>
<head>
<title>HSRgit2RSS</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
<body>
<div class="container">

	<h1>HSRgit2RSS</h1>
	<p>Show commits to the HSR git system (SCM Manager) in a RSS feed</p>
	
	<form method="get" action="found.php">
		<fieldset>
		<legend>Looking for your feed?</legend>
		<label>I hope you still know the name of the feed!</label>
		<input type="text" name="reponame" placeholder="Put it here…">
		<button type="submit" class="btn">Submit</button>
		</fieldset>
    </form>
	
</div>
</body>
</html>