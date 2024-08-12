<?php
// Define an array of URLs with corresponding IDs
$urls = array(
  'page1' => 'https://example.com/page1',
  'page2' => 'https://example.com/page2',
  'page3' => 'https://example.com/page3',
  'page4' => 'https://example.com/page4',
  'page5' => 'https://example.com/page5'
);

// Check if the ID is valid
if (isset($_GET['id']) && array_key_exists($_GET['id'], $urls)) {
  // Redirect the user to the URL for the specified ID
  header('Location: ' . $urls[$_GET['id']]);
  exit;
} else {
  // Display an error message if the ID is invalid
  echo 'Invalid ID';
}
?>