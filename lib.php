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
