<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A decorator applied to a content string value in order to create rich text.
 */
class Decorator extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\DecoratorType
     */
    public $type = null;

    /**
     * The starting character of this decorator within the content string. Use zero for
     * the first character.
     *
     * @var int
     */
    public $offset = null;

    /**
     * The number of content characters to alter with this decorator. Decorators such
     * as line breaks can have zero length and fit between characters.
     *
     * @var int
     */
    public $length = null;

    /**
     * The relative intensity or variation of this decorator. Decorators such as
     * bullet-points, for example, can have multiple indentation depths.
     *
     * @var int
     */
    public $depth = null;
}
