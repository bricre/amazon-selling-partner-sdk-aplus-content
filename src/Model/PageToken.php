<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A page token that is returned when the results of the call exceed the page size.
 * To get another page of results, call the operation again, passing in this value
 * with the pageToken parameter.
 */
class PageToken extends AbstractModel
{
    protected $isRawObject = true;
}
