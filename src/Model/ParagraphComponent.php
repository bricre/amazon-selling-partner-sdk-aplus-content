<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A list of rich text content, usually presented in a text box.
 */
class ParagraphComponent extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\TextComponent[]
     */
    public $textList = null;
}
