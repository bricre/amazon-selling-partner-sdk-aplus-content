<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Standard product description text.
 */
class StandardProductDescriptionModule extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\ParagraphComponent
     */
    public $body = null;
}
