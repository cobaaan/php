<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print '名前は' . $name . 'ですね。' . "<br />";
print '商品は' . $choices . 'ですね。' . "<br />";
print '注文数は' . $number . '個ですね。' . "<br />";
