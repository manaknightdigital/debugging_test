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

$list1 = [
    'a' => 1
];

$list2 = [];

update_list($list1);
var_dump($list1);

update_list($list2);
var_dump($list2);

$list_of_numbers = [1,2,3,4,5,6];
echo seperatestringwithcommas($list_of_numbers);

var_dump(db_results(1)->a);
echo '<br/>';

echo generate_dynamic_string (1, 2, 3);

echo return_json_data();

echo get_user_messages();

mysql_escape_string('1,2,3,4');
