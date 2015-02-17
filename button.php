<?php

$block->openTag('a', [
  'class' => 'btn',
  'href' => $block->model['url']
]);

echo $block->content('before');

echo $block->model['name'];

echo $block->content('after', true);

$block->closeTag();
