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
        $this->htmlFactory = new HtmlFactory\Html();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            HtmlFactory\Html::class,
            $this->htmlFactory
        );
    }

    public function testBuildHtmlString()
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
}
