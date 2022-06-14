<?php

namespace Amz\AplusContent\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * An A+ Content module. An A+ Content document is composed of content modules. The
 * contentModuleType property selects which content module types to use.
 */
class ContentModule extends AbstractModel
{
    /**
     * @var \Amz\AplusContent\Model\ContentModuleType
     */
    public $contentModuleType = null;

    /**
     * @var \Amz\AplusContent\Model\StandardCompanyLogoModule
     */
    public $standardCompanyLogo = null;

    /**
     * @var \Amz\AplusContent\Model\StandardComparisonTableModule
     */
    public $standardComparisonTable = null;

    /**
     * @var \Amz\AplusContent\Model\StandardFourImageTextModule
     */
    public $standardFourImageText = null;

    /**
     * @var \Amz\AplusContent\Model\StandardFourImageTextQuadrantModule
     */
    public $standardFourImageTextQuadrant = null;

    /**
     * @var \Amz\AplusContent\Model\StandardHeaderImageTextModule
     */
    public $standardHeaderImageText = null;

    /**
     * @var \Amz\AplusContent\Model\StandardImageSidebarModule
     */
    public $standardImageSidebar = null;

    /**
     * @var \Amz\AplusContent\Model\StandardImageTextOverlayModule
     */
    public $standardImageTextOverlay = null;

    /**
     * @var \Amz\AplusContent\Model\StandardMultipleImageTextModule
     */
    public $standardMultipleImageText = null;

    /**
     * @var \Amz\AplusContent\Model\StandardProductDescriptionModule
     */
    public $standardProductDescription = null;

    /**
     * @var \Amz\AplusContent\Model\StandardSingleImageHighlightsModule
     */
    public $standardSingleImageHighlights = null;

    /**
     * @var \Amz\AplusContent\Model\StandardSingleImageSpecsDetailModule
     */
    public $standardSingleImageSpecsDetail = null;

    /**
     * @var \Amz\AplusContent\Model\StandardSingleSideImageModule
     */
    public $standardSingleSideImage = null;

    /**
     * @var \Amz\AplusContent\Model\StandardTechSpecsModule
     */
    public $standardTechSpecs = null;

    /**
     * @var \Amz\AplusContent\Model\StandardTextModule
     */
    public $standardText = null;

    /**
     * @var \Amz\AplusContent\Model\StandardThreeImageTextModule
     */
    public $standardThreeImageText = null;
}
