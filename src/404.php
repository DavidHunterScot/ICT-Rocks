<?php

$page_title = "Not Found (404)";

$friendly_urls = false;

$page_content = function()
{
?>

<h1>Not Found (404)</h1>

<p>The resource you tried to access cannot be found.</p>

<ul>
    <li>Check the URL in the address bar of your web browsing software for any typing errors.</li>
    <li>Have a look around the website to see if you can find the resource. The <a href="/">home</a> page is a good place to start.</li>
    <li>(Optionally) If you clicked a hyperlink or button on another resource, that could now be considered outdated. Please attempt notify those responsible about this so it can be updated or removed accordingly.</li>
</ul>

<p>Feel free to get in touch if you believe there is an issue with this website, or have any further questions or concerns.</p>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
