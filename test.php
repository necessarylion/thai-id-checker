<?php

use Necessarylion\ThaiIdChecker;

require __DIR__.'/vendor/autoload.php';

$checker = new ThaiIdChecker;
$result = $checker->check('13-digit-thai-id-number');

if($result) {
  echo "true";
}
else {
  echo 'false';
}