<?php

// File: app/Helpers/text_helper.php

function limit_characters($text, $limit = 100, $suffix = '...')
{
 if (mb_strlen($text) <= $limit) {
  return $text;
 } else {
  return rtrim(mb_substr($text, 0, $limit)) . $suffix;
 }
}
