<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Plain positional text, used in collections of brief labels and descriptors.
 */
class PlainTextItem extends AbstractModel
{
    /**
     * The rank or index of this text item within the collection. Different items
     * cannot occupy the same position within a single collection.
     *
     * @var int
     */
    public $position = null;

    /**
     * The actual plain text.
     *
     * @var string
     */
    public $value = null;
}
