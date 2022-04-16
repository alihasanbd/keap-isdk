<?php
require_once(__DIR__ . '/loader.php');

$app = new iSDK;
echo "created object!<br/>";

if ($app->cfgCon(iSDK_APP, iSDK_TOKEN)) {

  echo "app connected!<br/>";
} else {
  echo "connection failed!<br/>";
}
