<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The IETF language tag. This only supports the primary language subtag with one
 * secondary language subtag. The secondary language subtag is almost always a
 * regional designation. This does not support additional subtags beyond the
 * primary and secondary subtags.
 * **Pattern:** ^[a-z]{2,}-[A-Z0-9]{2,}$.
 */
class LanguageTag extends AbstractModel
{
    protected $isRawObject = true;
}
