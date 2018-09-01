<?php
$config = [
  'sitename' => 'Yeticave',
  'tpl_path' => 'template/',
  'enable' => true
];
if ($config['enable']) {
  $page_content = renderTemplate($config['tpl_path'].'index.php', ['goods'=>$goods]);
$content = renderTemplate($config['tpl_path'].'layout.php', ['content'=>$page_content, 'category' => $category, 'is_auth' => $is_auth, 'user_avatar'=>$user_avatar, 'user_name'=> $user_name]);

  
}
else {
  $error_msg = 'Сайт на тех обслуживании!!!';
  $content = require_once($config['tpl_path'].'off.php');
}
print($content);