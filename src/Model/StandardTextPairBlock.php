<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The A+ Content standard label and description block, comprised of a pair of text
 * components.
 */
class StandardTextPairBlock extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $label = null;

    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $description = null;
}
