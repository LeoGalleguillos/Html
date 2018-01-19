<?php
namespace LeoGalleguillos\Html\Model\Service;

class Html
{
    public function getHtml(string $url) : string
    {
        return file_get_contents($url);
    }
}
