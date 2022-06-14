<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Rich text content.
 */
class TextComponent extends AbstractModel
{
    /**
     * The actual plain text.
     *
     * @var string
     */
    public $value = null;

    /**
     * @var \Amz\AplusContent\Model\DecoratorSet
     */
    public $decoratorSet = null;
}
