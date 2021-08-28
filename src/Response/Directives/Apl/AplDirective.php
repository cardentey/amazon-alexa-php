<?php

namespace MaxBeckers\AmazonAlexa\Response\Directives\Apl;

use MaxBeckers\AmazonAlexa\Response\Directives\Directive;

/**
 * @author Roberto Cardentey <cardentey@gmail.com>
 */
class AplDirective extends Directive
{
    const TYPE = 'Alexa.Presentation.APL.RenderDocument';

    const VERSION = '1.0';

    /**
     * @var token|null
     */
    public $token;

    public $version;

    public $document;

    public $datasources;


    /**
     * @param string $token
     *
     * @return RenderAplDirective
     */
    public static function create($token, Array $document, Array $datasources): self
    {
        $renderAplDirective = new self();

        $renderAplDirective->type     = self::TYPE;
        $renderAplDirective->version     = self::VERSION;

        $renderAplDirective->token = $token;
        $renderAplDirective->document = $document;
        $renderAplDirective->datasources = $datasources;

        return $renderAplDirective;
    }
}
