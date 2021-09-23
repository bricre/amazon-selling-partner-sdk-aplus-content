<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The A+ Content standard fixed length list of text, usually presented as bullet
 * points.
 */
class StandardTextListBlock extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\TextItem[]
     */
    public $textList = null;
}
