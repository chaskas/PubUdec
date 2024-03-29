<?php

class PubUdeC {

  static public function slugify($text) {
    // replace non letter or digits by -
    $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

    // trim
    $text = trim($text, '-');

    // transliterate
    if (function_exists('iconv')) {
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    }

    // lowercase
    $text = strtolower($text);

    // remove unwanted characters
    $text = preg_replace('#[^-\w]+#', '', $text);

    if (empty($text)) {
      return 'n-a';
    }

    return $text;
  }
  public static function formatDate($str)
  {
    $date = date_create($str);
    return date_format($date, 'd/m/Y');
  }

}

?>
