<?php

// Include the template file used to draw this page
require('../template/main.inc.php');

// Instantiate a page object with the page title
$page = new Page('Hello World!');

// Different ways to set options
$page['showRightSidebar'] = true;
$page->setOption('showRightSidebar', true);
$page->setOptions(array('showRightSidebar' => true));

// Adding stylesheets
$page->addStyle($page->baseUrl .'css/extra.css', 'screen');
$page->addStyle('<link href="'. $page->baseUrl .'css/extra.css" rel="stylesheet">');
$page->addStyle(<<<EOHTML
<style>
/* ... */
</style>
EOHTML
);

// Adding scripts
$page->addScript($page->baseUrl .'js/init-charts.js');
$page->addScript(<<<EOHTML
<script>
// ...
</script>
EOHTML
);

// Add content to the sidebar
$page->getSidebar('right')->add('news', <<<EOHTML
<div id="news-widget" class="sidebar-item">
	<h3 class="title">News</h3>
	<ul>
		<li>Sample Item 1</li>
		<li>Sample Item 2</li>
		<li>Sample Item 3</li>
	</ul>
</div>
EOHTML
);

// Modify navigation in the sidebar
$page->getSidebar('left')->get('nav')->add(array('path' => '/sample/', 'title' => 'Sample'));

// Draw the page header
$page->drawHeader();

// Draw the page content
?>
<h2>1.1 Title</h2>
<p>Welcome.</p>
<h2>1.2 Title</h2>
<p>Welcome.</p>
<?

// Draw the page footer
$page->drawFooter();

?>
