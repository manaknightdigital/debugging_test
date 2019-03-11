<?php
//Question #1: What's wrong with this function? How do you correct this?
function get_model_name ($model) 
{
$model_no_plural = (strlen($model) > 0 && substr($model, -1) == 's') ? $model : ($model . 's');
$model_singular = ((strlen($model) > 0 && substr($model, -1)) == 's') ? substr($model, 0, strlen($model) - 1) : $model;
  return [
   'plural' => $model_no_plural,
   'single' => $model_singular,      
  ];
}


//Question #2: What's wrong with this function? How do you correct this properly?
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

//Question #3: What's wrong with this function? How do you correct this properly without changing return value?
function update_list ($list)
{
    $some_boolean_condition = true;
    if (array_key_exists('a', $list))
    {
      $list['a'] = 'updated';
    }

    $list['b'] = 1;

    return $some_boolean_condition;
}

//Question #4: What's wrong with this function? Is there anything else wrong besides the code?
function seperatestringwithcommas ($list) {  $final_string = '';  foreach ($list as $key => $value) {$final_string = $final_string . $value . '&#44;';}  return $final_string;}

//Question #5: What's wrong with this function?
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

//Question #6: What's wrong with this function? What is the proper way to do this?
function generate_dynamic_string ($x, $y, $z) {
  $results = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ' .
  'Lorem Ipsum has been the industry\'s ' . $x . 'standard dummy text ever since the 1500s, when' .
  ' an unknown printer took a galley of type and scrambled' . $y . 'it to make a type specimen book. ' .
  'It has survived not only five centuries, ' . $z . 'but also the leap into electronic typesetting, ' .
  'remaining essentially unchanged. It was popularised in the 1960s with the release of Letra' . $x .
  'set sheets containing Lorem Ipsum passages, and more recently with desktop publishing' . $y .
  'software like Aldus PageMaker including versions of Lorem Ipsum.' . ($x * $y * $z);

  return $results;
}

//Question #7: What's wrong with this function output? How do you correct this?
function return_json_data ()
{
  $results = [
    'scientist' => ['Schrödinger', 'Einstein', 'Newton']
  ];
  return json_encode($results);
}

//Question #8: What's wrong with this function output? How do you correct this? Why is this important?
function get_user_messages ()
{
  return "<script>alert('hello');</script>";
}

//Question #9: What's wrong with this function?
function is_adult ($age)
{
  if ($age = 20)
  {
    return 'is adult';
  }
  else
  {
    return 'is child';
  }
}

//Question #10: What's wrong with this function output? How do you correct this?
function loop_through ($j)
{
  for ($i=0; $i < $j; $i++)
    echo $i;
}

//Question #11: What's wrong with this function output? How do you correct this properly without using more functions?
function is_null_function() {
  $obj = null;
  if ($obj == false) {
      echo 'is not null';
  } else {
      echo 'is null';
  }
}
