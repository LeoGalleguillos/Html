<?php
namespace LeoGalleguillos\HtmlTest\Model\Service;

use LeoGalleguillos\Html\Model\Entity as HtmlEntity;
use LeoGalleguillos\Html\Model\Factory as HtmlFactory;
use LeoGalleguillos\Html\Model\Service as HtmlService;
use PHPUnit\Framework\TestCase;

class WordsOnlyTest extends TestCase
{
    protected function setUp()
    {
        $this->wordsOnlyService = new HtmlService\WordsOnly();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            HtmlService\WordsOnly::class,
            $this->wordsOnlyService
        );
    }

    public function testGetWordsOnly()
    {
        $string   = file_get_contents(__DIR__ . '/../../Short.html');
        $expected = 'TechCrunch The latest technology news and information on startups Facebook is gearing up to prioritize news content by publishers a group of Facebook users have deemed trustworthy Facebook head of News Feed Adam Mosseri said the company surveyed a diverse and representative sampleof U S based people about their familiarity and trust in various sources of news That data Mosseri said will serve to inform News Feed rankings';
        $this->assertEquals(
            substr($expected, 0, 240),
            substr($this->wordsOnlyService->getWordsOnly($string), 0, 240)
        );
    }
}
