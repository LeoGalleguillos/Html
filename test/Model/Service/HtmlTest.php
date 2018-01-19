<?php
namespace LeoGalleguillos\HtmlTest\Model\Service;

use LeoGalleguillos\Html\Model\Entity as HtmlEntity;
use LeoGalleguillos\Html\Model\Factory as HtmlFactory;
use LeoGalleguillos\Html\Model\Service as HtmlService;
use PHPUnit\Framework\TestCase;

class HtmlTest extends TestCase
{
    protected function setUp()
    {
        $this->htmlService = new HtmlService\Html();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            HtmlService\Html::class,
            $this->htmlService
        );
    }

    public function testGetHtml()
    {
        $this->assertTrue(
            is_string(
                $this->htmlService->getHtmlFromUrl('https://www.sotosummarize.com/')
            )
        );
    }
}
