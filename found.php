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
	
	<?php
	
		$reponame = $_GET['reponame'];

		$xml = "feeds/{$reponame}.rss";

		if(file_exists($xml))
		{
			?>
			<p class="text-info">Your are lucky, we found your feed!</p>
	
			<p class="text-info">Copy this link into your feedereader to follow your new feed</p>
			<pre>
			<? //TODO Change
			echo "http://www.gianclaudio.ch/HSRgit2RSS/".$xml ?>
			</pre>
			
			<p>Go to your git repository on <a href="http://git.hsr.ch">git</a>  and add a new webhook with the following link:</p>
			<pre>
			<? //TODO Change
			echo "http://www.gianclaudio.ch/HSRgit2RSS/append.php?fn=".$reponame."&rn=\${repository.name}&a=\${changeset.author.name}&d=\${changeset.date}&id=\${changeset.id}&m=\${changeset.description}" ?>
			</pre>	
			<p>Do not forget to check the nice "on every commit" checkbox, otherwise you will not receive every commit!</p>
			<p class="text-warning">Important! By adding this line to your repo on SCM Manager, your commit messages will become public!</p>
			<?php
		}
		else
		{
			?>
			
			<p class="text-error">Sorry, we could not find a feed with that name!</p>
			
			<?php
		}
	?>
</div>
</body>
</html>