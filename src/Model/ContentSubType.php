<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The A+ Content document subtype. This represents a special-purpose type of an A+
 * Content document. Not every A+ Content document type will have a subtype, and
 * subtypes may change at any time.
 */
class ContentSubType extends AbstractModel
{
    protected $isRawObject = true;
}
