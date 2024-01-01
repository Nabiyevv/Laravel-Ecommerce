<?php

namespace App\Functions;


class StockFunction
{
    public static function filterImagesFromHtml($value)
    {
        if(!$value) return [];
        $images = [];
        $pattern = '/<img\b[^>]*\bsrc="([^"]*)"[^>]*>/';

        preg_match_all($pattern, $value, $matches);
        if(empty($matches[1])) return [];

        foreach ($matches[1] as $url) {
            $position = strpos($url, '/stocks/');
            if ($position !== false) {
                // Extract the substring after '/storage/'
                $substring = substr($url, $position + 1);
                $images[] = $substring;
            }
        }
        return $images;
    }
    public static function sendImagesToDb($images) : string
    {
        $imagesPath = implode(' || ', $images);
        return $imagesPath;
    }

    public static function parseImagesToHtml($images)
    {
        if(!$images)
            return '<p style="font-family: Arial, sans-serif; font-size: 18px;">Don\'t have any image</p>';
        $images = explode(' || ', $images);
        $images = array_map(function ($image) {
            return '<figure data-trix-attachment="{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;download.jpeg&quot;,&quot;filesize&quot;:5486,&quot;height&quot;:194,&quot;href&quot;:&quot;http://localhost:8000/storage/stocks/IqbWXAPtrQBmf7RQxSw43fAbuttrTTHmL1tfAT8c.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/stocks/IqbWXAPtrQBmf7RQxSw43fAbuttrTTHmL1tfAT8c.jpg&quot;,&quot;width&quot;:259}" data-trix-content-type="image/jpeg" data-trix-attributes="{&quot;presentation&quot;:&quot;gallery&quot;}" class="attachment attachment--preview attachment--jpeg">
            <a href="http://localhost:8000/storage/' . $image . '">
              <img src="http://localhost:8000/storage/' . $image . '" width="259" height="194">
              <figcaption class="attachment__caption">
              <span class="attachment__size">5.36 KB</span>
              <span class="attachment__name">download.jpeg</span>
              </figcaption>
            </a>
          </figure>';
        }, $images);
        $parsedImages = '<div class="attachments" style="display:flex; flex-wrap:wrap; gap: 10px;">' . implode(' ', $images) . '</div>';

        return $parsedImages;
    }
}