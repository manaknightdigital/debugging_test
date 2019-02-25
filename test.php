<?php
include_once 'lib.php';

$model = 'abcs';

$model_result = get_model_name($model);
echo $model_result['single'];
echo $model_result['plural'];

execute_complicated_function ([
  'a' => 1, 
  'b' => 2
]);
