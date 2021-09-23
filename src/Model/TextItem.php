<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Rich positional text, usually presented as a collection of bullet points.
 */
class TextItem extends AbstractModel
{
    /**
     * The rank or index of this text item within the collection. Different items
     * cannot occupy the same position within a single collection.
     *
     * @var int
     */
    public $position = null;

    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $text = null;
}
