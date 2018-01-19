<?php
namespace LeoGalleguillos\Html\Model\Service;

use LeoGalleguillos\Html\Model\Entity as HtmlEntity;

class Title
{
    public function getTitleFromHtml(
        HtmlEntity\Html $html
    ) : HtmlEntity\Tag\Title {
        $title = new HtmlEntity\Tag\Title();

        $htmlString = $html->getHtml();
        preg_match('/<title>(.*)<\/title>/siU', $htmlString, $title_matches);
        $titleValue = trim($title_matches[1]);
        $title->setValue($titleValue);

        return $title;
    }
}
