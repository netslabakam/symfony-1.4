<?php
/**
 * Created by PhpStorm.
 * User: qwerty1
 * Date: 12.10.2018
 * Time: 15:04
 */

class Jobeet
{
    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        return $text;
    }
}