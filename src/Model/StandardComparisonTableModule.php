<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The standard product comparison table.
 */
class StandardComparisonTableModule extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\StandardComparisonProductBlock[]
     */
    public $productColumns = null;

    /**
     * @var \Amz\AplusContent\Model\PlainTextItem[]
     */
    public $metricRowLabels = null;
}
