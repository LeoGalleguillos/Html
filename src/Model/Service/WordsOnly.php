<?php
namespace LeoGalleguillos\Html\Model\Service;

use LeoGalleguillos\Html\Model\Entity as HtmlEntity;

/**
 * Words only.
 */
class WordsOnly
{
    /**
     * Get words only.
     *
     * Removes code (removed HTML, CSS, and JavaScript) from a string.
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
