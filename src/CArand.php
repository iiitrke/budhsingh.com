<?php
session_start();

// Define an array of URLs
$urls = array(
  'https://troodonmedia.aff.live/c?o=20254200&m=1387&a=436335',
  'https://troodonmedia.aff.live/c?o=20254142&m=1387&a=436335',
  'https://troodonmedia.aff.live/c?o=20254134&m=1387&a=436335',
  'https://troodonmedia.aff.live/c?o=20254124&m=1387&a=436335',
  'https://troodonmedia.aff.live/c?o=20279270&m=1387&a=436335'
);

// Retrieve the list of URLs that have already been visited in this session
$visited_urls = isset($_SESSION['visited_urls']) ? $_SESSION['visited_urls'] : array();

// Filter out the URLs that have already been visited
$unvisited_urls = array_diff($urls, $visited_urls);

// If all URLs have been visited, reset the visited URLs list
if (empty($unvisited_urls)) {
  $unvisited_urls = $urls;
  $visited_urls = array();
}

// Select a random URL from the list of unvisited URLs
$random_url = $unvisited_urls[array_rand($unvisited_urls)];

// Add the selected URL to the list of visited URLs
$visited_urls[] = $random_url;

// Store the visited URLs list in the session
$_SESSION['visited_urls'] = $visited_urls;

// Redirect the user to the selected URL
header('Location: ' . $random_url);
exit;
?>