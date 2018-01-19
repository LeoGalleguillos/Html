<?php
namespace LeoGalleguillos\Html\Model\Entity;

class Html
{
    /**
     * @var string
     */
    protected $html;

    public function getHtml() : string
    {
        return $this->html;
    }

    public function setHtml(string $html) : self
    {
        $this->html = $html;
        return $this;
    }
}
