<?php
if($_GET['dev'] == 21){
	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
	print_r($url);
}