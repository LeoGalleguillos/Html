<?php
namespace LeoGalleguillos\HtmlTest\Model\Service;

use LeoGalleguillos\Html\Model\Entity as HtmlEntity;
use LeoGalleguillos\Html\Model\Factory as HtmlFactory;
use LeoGalleguillos\Html\Model\Service as HtmlService;
use PHPUnit\Framework\TestCase;

class TitleTest extends TestCase
{
    protected function setUp()
    {
        $this->titleService = new HtmlService\Title();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            HtmlService\Title::class,
            $this->titleService
        );
    }

    public function testGetTitleFromHtml()
    {
        $html = new HtmlEntity\Html();
        $html->setString(
            file_get_contents(__DIR__ . '/../../Test.html')
        );
        $title = new HtmlEntity\Tag\Title();
        $title->setValue(
            'TechCrunch - The latest technology news and information on startups'
        );
        $this->assertEquals(
            $title,
            $this->titleService->getTitleFromHtml($html)
        );
    }
}
