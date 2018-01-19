<?php
namespace LeoGalleguillos\HtmlTest\Model\Entity;

use LeoGalleguillos\Html\Model\Entity as HtmlEntity;
use LeoGalleguillos\Html\Model\Factory as HtmlFactory;
use LeoGalleguillos\Html\Model\Service as HtmlService;
use PHPUnit\Framework\TestCase;

class TagTest extends TestCase
{
    protected function setUp()
    {
        $this->tagEntity = new HtmlEntity\Tag();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            HtmlEntity\Tag::class,
            $this->tagEntity
        );
    }

    public function testProperties()
    {
        $this->assertObjectHasAttribute('value', $this->tagEntity);
    }
}
