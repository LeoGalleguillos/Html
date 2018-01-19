<?php
namespace LeoGalleguillos\HtmlTest\Model\Entity;

use LeoGalleguillos\Html\Model\Entity as HtmlEntity;
use LeoGalleguillos\Html\Model\Factory as HtmlFactory;
use LeoGalleguillos\Html\Model\Service as HtmlService;
use PHPUnit\Framework\TestCase;

class HtmlTest extends TestCase
{
    protected function setUp()
    {
        $this->htmlEntity = new HtmlEntity\Html();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            HtmlEntity\Html::class,
            $this->htmlEntity
        );
    }

    public function testProperties()
    {
        $this->assertObjectHasAttribute('string', $this->htmlEntity);
    }
}
