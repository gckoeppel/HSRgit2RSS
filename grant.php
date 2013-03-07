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
	
		$name = $_GET['name'];
		$mail = $_GET['mail'];
		$reponame = $_GET['reponame'];

		$xml = "feeds/{$reponame}.xml";

		if(file_exists($xml))
		{
			?>
			<p class="text-error">Feed already exist. Choose a better name</p>
			<?php
		}
		else
		{
			echo "Feed will be created...";
			
			$rss = new DOMDocument('1.0', 'UTF-8');
			$rss->formatOutput = true;

			$roo = $rss->createElement('rss');
			$roo->setAttribute('version', '2.0');
			$rss->appendChild($roo);

			$cha = $rss->createElement('channel');
			$roo->appendChild($cha); 
					
			$hea = $rss->createElement('title',
			utf8_encode($reponame));
			$cha->appendChild($hea);

			$hea = $rss->createElement('description',
			utf8_encode('RSS Feed of commits in '.$reponame));
			$cha->appendChild($hea);

			$hea = $rss->createElement('language',
			utf8_encode('de'));
			$cha->appendChild($hea);

			$hea = $rss->createElement('link',
			htmlentities('http://git.hsr.ch'));
			$cha->appendChild($hea);

			$hea = $rss->createElement('lastBuildDate',
			utf8_encode(date("D, j M Y H:i:s ").'GMT'));
			$cha->appendChild($hea);
			
			$itm = $rss->createElement('item');
			$cha->appendChild($itm);
			
			
			$dat = $rss->createElement('title',
			utf8_encode('Welcome to the feed'));
			$itm->appendChild($dat);

			$dat = $rss->createElement('description',
			utf8_encode('This feed will provide you with the latest commits on '.$reponame));
			$itm->appendChild($dat);   

			$dat = $rss->createElement('link',
			htmlentities('http://git.hsr.ch'));
			$itm->appendChild($dat);

			$dat = $rss->createElement('pubDate',
			utf8_encode(date("D, j M Y H:i:s ").'GMT'));
			$itm->appendChild($dat);

			$dat = $rss->createElement('guid',
			htmlentities('http://git.hsr.ch'));
			$itm->appendChild($dat);
			
			$rss->save($xml);
			?>
			
			<p class="text-info">Your new feed is ready to use!</p>
	
			<p class="text-info">Copy this link into your feedereader to follow your new feed</p>
			<pre>
			<? //TODO Change
			echo "http://sound.vshsr.ch/MeineKraft/".$xml ?>
			</pre>
			
			
			<p>Go to your git repository on <a href="http://git.hsr.ch">git</a>  and add a new webhook with the following link:</p>
			<pre>
			<? //TODO Change
			echo "http://sound.vshsr.ch/MeineKraft/append.php?rn=".$reponame ?>
			</pre>	
			<!--TODO add warning-->			
			<?php
		}
	?>
</div>
</body>
</html>