<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/classes/page.class.php';

$page = new page();
$page->header();

echo "test body<br/>";

$page->footer();

?>
