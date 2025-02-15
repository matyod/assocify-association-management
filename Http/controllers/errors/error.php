<?php

switch ($status) {
  case 403:
    $title = "Forbidden";
    $message = "Oops! Looks like you’re not allowed in here. It’s like trying to sneak into a VIP-only party. Better luck next time!";
    break;
  case 404:
    $title = "Not Found";
    $message = "Sorry, we can't find that page. You'll find lots to explore on the home page.";
    break;
  case 429:
    $title = "Too Many Requests";
    $message = "Slow down there! You’ve sent too many requests in too little time. Take a breather and try again in a few moments.";
    break;
  case 500:
    $title = "Internal Server Error";
    $message = "Whoops! Our server tripped and fell. We’re getting it back on its feet. Please check back in a bit!";
    break;
}

require view_path('errors/error.view.php');