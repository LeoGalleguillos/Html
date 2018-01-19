<?php
namespace LeoGalleguillos\HtmlTest\Model\Factory;

use LeoGalleguillos\Html\Model\Entity as HtmlEntity;
use LeoGalleguillos\Html\Model\Factory as HtmlFactory;
use LeoGalleguillos\Html\Model\Service as HtmlService;
use PHPUnit\Framework\TestCase;

class HtmlTest extends TestCase
{
    protected function setUp()
    {
        $this->htmlServiceMock = $this->createMock(
            HtmlService\Html::class
        );
        $this->htmlFactory = new HtmlFactory\Html(
            $this->htmlServiceMock
        );
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            HtmlFactory\Html::class,
            $this->htmlFactory
        );
    }

    public function testBuildFromHtmlString()
    {
        $htmlString = '<html></html>';
        $htmlEntity = $this->htmlFactory->buildFromHtmlString($htmlString);

        $this->assertInstanceOf(
            HtmlEntity\Html::class,
            $htmlEntity
        );

        $this->assertSame(
            $htmlEntity->getHtml(),
            $htmlString
        );
    }

    public function testBuildFromUrl()
    {
        $url = 'https://www.sotosummarize.com/';
        $htmlEntity = $this->htmlFactory->buildFromUrl($url);

        $this->assertInstanceOf(
            HtmlEntity\Html::class,
            $htmlEntity
        );

        $this->assertTrue(
            is_string($htmlEntity->getHtml())
        );
    }
}
