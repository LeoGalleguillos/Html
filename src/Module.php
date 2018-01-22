<?php
namespace LeoGalleguillos\Html;

use LeoGalleguillos\Html\Model\Factory as HtmlFactory;
use LeoGalleguillos\Html\Model\Service as HtmlService;
use LeoGalleguillos\Html\Model\Table as HtmlTable;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                ],
                'factories' => [
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                HtmlService\Html::class => function ($serviceManager) {
                    return new HtmlService\Html();
                },
                HtmlService\WordsOnly::class => function ($serviceManager) {
                    return new HtmlService\WordsOnly();
                },
            ],
        ];
    }
}
