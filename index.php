<?php
include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='index.html') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='details.html') {
	include $browser_t.'/details.html';
	}
elseif ($page_name=='buy.html') {
	include $browser_t.'/buy.html';
	}
elseif ($page_name=='women.html') {
	include $browser_t.'/women.html';
	}
elseif ($page_name=='registration.html') {
	include $browser_t.'/registration.html';
	}
elseif ($page_name=='contact.html') {
	include $browser_t.'/contact.html';
	}
elseif ($page_name=='contact-post.html') {
	include 'app/contact.php';
	}
else
	{
		include $browser_t.'/404.html';
	}

?>
