<?php

use Fly\Foundation\Application;

$app = new Application(
	$_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);
