<?php
namespace LeoGalleguillos\Html\Model\Factory;

use LeoGalleguillos\Html\Model\Entity as HtmlEntity;
use LeoGalleguillos\Html\Model\Service as HtmlService;

class Html
{
    public function __construct(
        HtmlService\Html $htmlService
    ) {
        $this->htmlService = $htmlService;
    }

    public function buildFromHtmlString(string $string) : HtmlEntity\Html
    {
        $htmlEntity = new HtmlEntity\Html();
        return $htmlEntity->setString($string);
    }

    public function buildFromUrl(string $url) : HtmlEntity\Html
    {
        $html = $this->htmlService->getHtmlFromUrl($url);
        return $this->buildFromHtmlString($html);
    }
}
