<?php
$title = 'Home Page'; // Set the page title
ob_start(); // Start output buffering
?>

<h1>Welcome to the Home Page</h1>
<p>This is the content of the home page.</p>

<?php
$content = ob_get_clean(); // Get the buffered content
include './layouts'; // Include the layout file
?>