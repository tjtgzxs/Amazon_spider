<?php

namespace App\Controllers;
use DOMDocument;
use DOMXPath;

class SpiderController
{




    public function home()
    {
        $html = file_get_contents("https://www.amazon.co.uk/s?k=reverse+osmosis+water+filter&ref=nb_sb_noss");
        $dom = new DOMDocument();

        @$dom->loadHTML($html);


        $dom->normalize();


        $xpath = new DOMXPath($dom);


        $hrefs = $xpath->query("/html/body//div[@s-result-list]//@href");

        for ($i = 0; $i < $hrefs->length; $i++) {

            $href = $hrefs->item($i);

            $linktext = $href->nodeValue;

            echo $linktext;
            echo "\r\n";

        }
    }

}