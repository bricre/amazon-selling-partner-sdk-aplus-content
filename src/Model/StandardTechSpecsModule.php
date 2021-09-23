<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The standard table of technical feature names and definitions.
 */
class StandardTechSpecsModule extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\TextComponent
     */
    public $headline = null;

    /**
     * The specification list.
     *
     * @var \Amz\AplusContent\Model\StandardTextPairBlock[]
     */
    public $specificationList = null;

    /**
     * The number of tables to present. Features are evenly divided between the tables.
     *
     * @var int
     */
    public $tableCount = null;
}
