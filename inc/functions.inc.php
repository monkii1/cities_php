<?php

function generate_alphabet() {
    $chars = [];
    $ordZ = ord('Z'); 
  
    for ($i = ord('A'); $i <= $ordZ; $i++) { 
      $chars[] = chr($i);
    }  
    return $chars;
};

function render($path, array $data = []) {
  $alphabet = generate_alphabet();
    extract($data);
    require($path); 
  }

function e($html) {
    return htmlspecialchars($html, ENT_QUOTES, 'UTF-8', true);
}