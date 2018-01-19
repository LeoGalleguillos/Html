<?php
namespace LeoGalleguillos\Html\Model\Factory;

use LeoGalleguillos\Html\Model\Entity as HtmlEntity;
use LeoGalleguillos\Html\Model\Service as HtmlService;

class Html
{
    public function buildFromHtmlString(string $html) : HtmlEntity\Html
    {
        $htmlEntity = new HtmlEntity\Html();
        return $htmlEntity->setHtml($html);
    }
}
