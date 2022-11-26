<?php
  function buildInput($name, $label, $obj=[], $type='text', $required=null){
    $value = $obj[$name];
    if(isset($required)) {
      $required = "required";
    }
    return  <<<HTML
      
        <label for="{$name}">
        <p>$label</p>
        <input id="{$name}" {$required} type="{$type}" name="{$name}" value="{$value}">
        </label>
HTML;
  }
?>