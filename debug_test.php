<?php

//Question #1: Why is this function not working as expected? How do you correct this?
/**
* Test Output:
* get_model_name ('abc')  => [ ["plural"]=>  string(4) "abcs"  ["single"]=>  string(2) "ab"]
* get_model_name ('abcs')  => [ ["plural"]=>  string(4) "abcs"  ["single"]=>  string(2) "abc"]
*/
function get_model_name ($model) 
{
$model_no_plural = (strlen($model) > 0 && substr($model, -1) == 's') ? $model : ($model . 's');
$model_singular = ((strlen($model) > 0 && substr($model, -1)) == 's') ? substr($model, 0, strlen($model) - 1) : $model;
  return [
   'plural' => $model_no_plural,
   'single' => $model_singular,      
  ];
}

//Question #2: Why is this function not working as expected? How do you correct this?
/**
* Test Output:
* divide_two_numbers (1, 2)  => 0.5
* divide_two_numbers (10,0)  => Division by zero
*/
function divide_two_numbers ($x, $y)
{
  return $x / $y;
}

//Question #3: During a large data migration, you get the following error: 
/**
Fatal error: Allowed memory size of 134217728 bytes exhausted (tried to allocate 54 bytes). 
You've traced the problem to the following snippet of code:

$stmt = $pdo->prepare('SELECT * FROM largeTable');
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $result) {
	// manipulate the data here
}
How would you refactor this code so that it stops triggering the memory error. 
*/

//Question #4: What's wrong with this function? 
//How do you correct this properly without changing return value?
/**
* Test Output:
* update_list (['a'])  => true
* update_list (['b', 'c'])  => true
*/
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

//Question #5: What's wrong with this function? 
//We want to see this in a text document not HTML.
/**
* Test Output:
* seperatestringwithcommas (['a', 'b'])  => a&#44;b&#44;
* seperatestringwithcommas (['a', 'b'])  => a&#44;
*/
function seperatestringwithcommas ($list) {  
    $final_string = '';  
    foreach ($list as $key => $value) {
        $final_string = $final_string . $value . '&#44;';
    }  
    return $final_string;
}

//Question #6:
/**
Show some code that illustrates how you would hash a user's password, and also how you 
would check that a password supplied by a user matches the password on file.

If your client cannot upgrade to PHP 5.5, and you have to hash passwords using existing
PHP libraries, what is one library/package that makes this easy?
*/

//Question #7: Why is this code bad? How would you improve it(HINT: best practice)?
/**
* Test Output:
* generate_dynamic_string ($x, $y, $z) =>  A non-numeric value encountered
* generate_dynamic_string (1,2,3)  => Lorem Ipsum is simply dummy text of the printing 
* and typesetting industry. Lorem Ipsum has been the industry's 1standard dummy 
* text ever since the 1500s, when an unknown printer took a galley of type and 
* scrambled2it to make a type specimen book. It has survived not only five 
* centuries, 3but also the leap into electronic typesetting, remaining 
* essentially unchanged. It was popularised in the 1960s with the release of 
* Letra1set sheets containing Lorem Ipsum passages, and more recently with 
* desktop publishing2software like Aldus PageMaker including versions of 
* Lorem Ipsum.6
*/
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

//Question #8: Why is the return value bad? How do you fix this?
/**
* Test Output:
* return_json_data() => {"scientist":["Schr\u00f6dinger","Einstein","Newton"]}
*/
function return_json_data ()
{
  $results = [
    'scientist' => ['Schrödinger', 'Einstein', 'Newton']
  ];
  return json_encode($results);
}

//Question #9: Why is the return value bad? How do you fix this (HINT: Best practice)?
/**
* Test Output:
* echo get_user_messages() => <script>alert('hello');</script>
*/
function get_user_messages ()
{
  return "<script>alert('hello');</script>";
}

//Question #10: Why is this function bad? How do you fix this?
/**
* Test Output:
* is_adult(5) => 'is child'
* is_adult(20) => 'is adult'
* is_adult(21) => 'is child'
* is_adult(19) => 'is child'
*/
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

//Question #11: Why is this function bad? How do you fix this?
function loop_through ($j)
{
  for ($i=0; $i < $j; $i++) {
    echo $i;  
  }
}

//Question #11: Why is this function bad? How do you fix this?
function is_null_custom_function() {
  $obj = null;
  if ($obj == false) {
      echo 'is not null';
  } else {
      echo 'is null';
  }
}
