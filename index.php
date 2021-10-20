<?php
use CowSay\Cow;
require_once __DIR__ . "/vendor/autoload.php";

$bessie = new Cow('Hello, Farm!');
$bessie->setTongue(W);

// store the output in a variable
$output = $bessie->say();

echo $output;
