<?php
  require_once './module/ua.php';
  $ua = new UserAgent();
  switch ($ua->set()) {
    case 'mobile':
    case 'tablet':
      include_once('_complete.php');
      break;
    default:
      include_once('_default.php');
      break;
  }
