<?php
namespace LeoGalleguillos\Html\Model\Service;

use LeoGalleguillos\Html\Model\Entity as HtmlEntity;

/**
 * Strip code.
 */
class WordsOnly
{
    /**
     * Strip code.
     *
     * Removes code (HTML, CSS, and JavaScript) from a string.
     *
     * @param string $string
     * @return string
     */
    public function getWordsOnly(
        string $string
    ) : string {
        $string = preg_replace('/<script.*?<\/script>/s', '', $string);
        $string = preg_replace('/<style.*?<\/style>/s', '', $string);
        $string = strip_tags($string);
        $string = html_entity_decode($string);

        $string = preg_replace('/[\pZ\pC]/u', ' ', $string);

        $string = preg_replace('/[^0-9A-Za-z \'’]/', ' ', $string);
        $string = preg_replace('/\s+/s', ' ', $string);
        return trim($string);
    }
}
