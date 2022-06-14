<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The base response data for paginated A+ Content operations. Individual
 * operations may extend this with additional data. If nextPageToken is not
 * returned, there are no more pages to return.
 */
class AplusPaginatedResponse extends AbstractModel
{
}
