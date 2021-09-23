<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The A+ Content standard text box block, comprised of a paragraph with a
 * headline.
 */
class StandardTextBlock extends AbstractModel
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
