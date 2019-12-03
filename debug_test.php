<?php

//Question #1: Why is this function bad? How do you fix this?
function loop_through ($j)
{
  for ($i=0; $i < $j; $i++) {
    echo $i;  
  }
}

//Question #2: Why is this function bad? How do you fix this?
function is_null_custom_function() {
  $obj = null;
  if ($obj == false) {
      echo 'is not null';
  } else {
      echo 'is null';
  }
}

//Question #3: Why is this function not working as expected? How do you correct this?
/**
* Test Output:
* divide_two_numbers (1, 2)  => 0.5
* divide_two_numbers (10,0)  => Division by zero
* Expected Output:
* divide_two_numbers (1,2)  => 0.5
* divide_two_numbers (10, 0)  => 0
*/
function divide_two_numbers ($x, $y)
{
  return $x / $y;
}

//Question #4: During a large data migration, you get the following error: 
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

//Question #5: What's wrong with this function? 
//How do you correct this properly without changing return value?
/**
* Test Output:
* update_list_a_value (['a'])  => true
* update_list_a_value (['b', 'c'])  => true
* Expected Output:
* update_list_a_value (['a'])  => true
* update_list_a_value (['b', 'c'])  => false
*/
function update_list_a_value ($list)
{
    $some_boolean_condition = true;
    if (array_key_exists('a', $list))
    {
      $list['a'] = 'updated';
    } 
    return $some_boolean_condition;
}

//Question #6: What's wrong with this function? 
//We want to see this in a text document not HTML.
/**
* Test Output:
* seperate_string_with_commas (['a', 'b'])  => a&#44;b&#44;
* seperate_string_with_commas (['a', 'b'])  => a&#44;
* Expected Output:
* seperate_string_with_commas (['a', 'b'])  => a,b
* seperate_string_with_commas (['a'])  => a
*/
function seperate_string_with_commas ($list) {  
    $final_string = '';  
    foreach ($list as $key => $value) {
        $final_string = $final_string . $value . '&#44;';
    }  
    return $final_string;
}

//Question #7:
/**
Show some code that illustrates how you would hash a user's password, and also how you 
would check that a password supplied by a user matches the password on file.

If your client cannot upgrade to PHP 5.5, and you have to hash passwords using existing
PHP libraries, what is one library/package that makes this easy?
*/

//Question #8: Why is this code bad? How would you improve it(HINT: best practice)?
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

//Question #9: Why is the return value bad? How do you fix this(HINT: look at line 126)?
/**
* Test Output:
* return_json_data_of_scientist() => {"scientist":["Schr\u00f6dinger","Einstein","Newton"]}
* Test Expected:
* return_json_data_of_scientist() => {"scientist":["Schrödinger","Einstein","Newton"]}
*/
function return_json_data_of_scientist ()
{
  $results = [
    'scientist' => ['Schrödinger', 'Einstein', 'Newton']
  ];
  return json_encode($results);
}

//Question #10: Why is the function output bad? How do you fix this (HINT: Best practice)?
function print_friend_list ()
{
 $friends = ['Bob', 'Anna', "<script>alert('hello');</script>", 'Sally'];
 echo '<ul>';
 foreach ($friends as $friend) {
     echo '<li>' . $friend . '</li>';
 }
 echo '</ul>';
}

//Question #11: Why is this function bad? How do you fix this?
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

//Question #12: Why is this function not working as expected? How do you correct this?
/**
* Test Output:
* get_plural_data ('abc')  => [ ["plural"]=>  "abcs"  ["single"]=>   "ab"]
* get_plural_data ('abcs')  => [ ["plural"]=> "abcs"  ["single"]=>   "abc"]
* Expected Output:
* get_plural_data ('abc')  => [ ["plural"]=>   "abc"  ["single"]=>  "abc"]
* get_plural_data ('abcs')  => [ ["plural"]=>  "abcs"  ["single"]=> "abc"]
*/
function get_plural_data ($model) 
{
    $model_plural = $model . 's';
    $model_singular = $model;
    
    if (strlen($model) > 0 && substr($model, -1) == 's') {
        $model_plural = $model;    
    }
    
    if ((strlen($model) > 0 && substr($model, -1)) == 's') {
        $model_singular = substr($model, 0, strlen($model) - 1);
    }
    
    return [
        'plural' => $model_plural,
        'single' => $model_singular,      
    ];
}
