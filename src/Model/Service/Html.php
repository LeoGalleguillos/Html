<?php
namespace LeoGalleguillos\Html\Model\Service;

class Html
{
    public function getHtmlFromUrl(string $url) : string
    {
        return file_get_contents($url);
    }
}
