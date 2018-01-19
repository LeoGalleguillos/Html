<?php
namespace LeoGalleguillos\Html\Model\Entity;

use LeoGalleguillos\Html\Model\Entity as HtmlEntity;

class Html
{
    /**
     * @var string
     */
    protected $string;

    public function getString() : string
    {
        return $this->string;
    }

    public function setString(string $string) : HtmlEntity\Html
    {
        $this->string = $string;
        return $this;
    }
}
