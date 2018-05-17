<?php

require_once('data.php');
require_once('functions.php');

$page_content = renderTemplate('templates/index.php', ['goods'=>$goods]);

$layout_content = renderTemplate('templates/layout.php', ['content'=>$page_content, 'title'=>'Главная']);
print ($layout_content);
