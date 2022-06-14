<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A standard headline and body text.
 */
class StandardTextModule extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $headline = null;

    /**
     * @var \Amz\AplusContent\Model\ParagraphComponent
     */
    public $body = null;
}
