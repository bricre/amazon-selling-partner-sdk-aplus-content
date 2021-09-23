<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A unique reference key for the A+ Content document. A content reference key
 * cannot form a permalink and may change in the future. A content reference key is
 * not guaranteed to match any A+ content identifier.
 */
class ContentReferenceKey extends AbstractModel
{
    protected $isRawObject = true;
}
