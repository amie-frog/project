<?php

$json_file = 'PickAPile.json';

$json_data = file_get_contents($json_file);

$pile = json_decode($json_data, true);

$questions = $pile['Questions'];
