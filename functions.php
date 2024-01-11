<?php
function isEmail($email)
{
  $chars = str_split($email);

  foreach ($chars as $char) {
    if ($char === '.') {
      return true;
    };
  };
};
?>