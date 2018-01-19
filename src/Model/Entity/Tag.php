<?php
namespace LeoGalleguillos\Html\Model\Entity;

use LeoGalleguillos\Html\Model\Entity as HtmlEntity;

class Tag
{
    /**
     * @var array
     */
    protected $attributes =[];

    /**
     * @var string
     */
    protected $kind;

    /**
     * @var string
     */
    protected $value;

    public function getValue() : string
    {
        return $this->value;
    }

    public function setValue(string $value) : HtmlEntity\Tag
    {
        $this->value = $value;
        return $this;
    }
}
