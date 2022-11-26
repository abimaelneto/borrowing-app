<?php
  function buildInput($name, $label, $obj){
    $value = $obj[$name];
    return  <<<HTML
        <label for="{$name}">
        <p>$label</p>
        <input id="{$name}" name="{$name}" value="{$value}">
        </label>
HTML;

  }
?>