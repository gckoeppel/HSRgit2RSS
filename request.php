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
	
	<form method="get" action="grant.php">
		<fieldset>
		<legend>Fill in this Form to request a new feed</legend>
		<label>name</label>
		<input type="text" name="name" placeholder="I will stalk you…">
		<label>e-mail</label>
		<input type="text" name="mail" placeholder="For spamming purpose…">
		<label>Name of your feed</label>
		<input type="text" name="reponame" placeholder="A fancy, unique name…">
		<!--TODO add warning-->
		<button type="submit" class="btn">Submit</button>
		</fieldset>
    </form>
	
</div>
</body>
</html>