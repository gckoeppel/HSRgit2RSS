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
	
	<form action="grant.php" methor="post">
	
		<fieldset>
		<legend>Fill in this Form to request a new feed</legend>
		<label>name</label>
		<input type="text" name="name" placeholder="Type something…">
		<label>e-mail</label>
		<input type="text" name="mail" placeholder="Type something…">
		<label>Name of your Repo</label>
		<input type="text" name="reponame" placeholder="Type something…">
		<button type="submit" class="btn">Submit</button>
		</fieldset>
    </form>
	
</div>
</body>
</html>