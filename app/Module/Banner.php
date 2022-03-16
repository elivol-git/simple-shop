<?php


namespace App\Module;


class Banner
{
    private static $i=null;
    private function __construct()
    {
    }

    public static function i()
    {
        if (self::$i == null) {
            self::$i = new self();
        }
        return self::$i;
    }


    public function displayBanner(string $banner):string
    {
        $bannerHtml = '';
        if ($banner) {
            $bannerHtml = "<div class=\"shadow p-3 mb-5 bg-white rounded\">$banner</div>";
        }

        return $bannerHtml;
    }
}