<?php

class Jobeet
{
  static public function slugify($text)
  {
    // 文字ではないもしくは数値ではないものすべてを-に置き換える
    $text = preg_replace('/\W+/', '-', $text);
 
    // トリムして小文字に変換する
    $text = strtolower(trim($text, '-'));
 
    if (empty($text))
    {
      return 'n-a';
    }

    return $text;
  }
}
