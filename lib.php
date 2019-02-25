<?php
function get_model_name ($model) 
{
$model_no_plural = (strlen($model) > 0 && substr($model, -1) == 's') ? $model : ($model . 's');
$model_singular = ((strlen($model) > 0 && substr($model, -1)) == 's') ? substr($model, 0, strlen($model) - 1) : $model;
  return [
   'plural' => $model_no_plural,
   'single' => $model_singular,      
  ];
}


function divide_two_numbers ($x, $y)
{
  return $x / $y;
}

function execute_complicated_function ($parameters)
{
  try {
    $number = divide_two_numbers(5, 0);
  } catch (\Exception $e) {
    echo 'Exception found';
  }
}

function update_list ($list)
{
    if (array_key_exists('a', $list))
    {
      $list['a'] = 'updated';
    }

    $list['b'] = 1;

    return true;
}

function seperatestringwithcommas ($list) {
  $final_string = '';
  foreach ($list as $key => $value) {$final_string = $final_string . $value . '&#44;';}
  return $final_string;
}

function db_results ($id)
{
  $obj = new stdClass;
  $obj->a = 1;
  $obj->b = 2;
  $obj2 = new stdClass;
  $obj2->a = 3;
  $obj2->b = 4;
  return [
    $obj,
    $obj2
  ];
}
