<?php
include_once 'lib.php';

$model = 'abcs';

$model_result = get_model_name($model);
echo $model_result['single'] . '<br/>';
echo $model_result['plural'] . '<br/>';

execute_complicated_function (['a' => 1]);

$list1 = [
    'a' => 1
];

$list2 = [];

update_list($list1);
var_dump($list1);
echo '<br/>';

update_list($list2);
var_dump($list2);
echo '<br/>';

$list_of_numbers = [1,2,3,4,5,6];
echo seperatestringwithcommas($list_of_numbers) . '<br/>';

var_dump(db_results(1)->a);
echo '<br/>';
echo '<br/>';

echo generate_dynamic_string (1, 2, 3);
echo '<br/>';
echo '<br/>';

echo return_json_data();
echo '<br/>';
echo '<br/>';

echo get_user_messages();

echo is_adult(1);
echo '<br/>';
echo '<br/>';

loop_through(20);
echo '<br/>';

mysql_escape_string('1,2,3,4');
