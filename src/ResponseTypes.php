<?php

namespace Amz\AplusContent;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'searchContentDocuments' => [
            '200.' => 'Amz\\AplusContent\\Model\\SearchContentDocumentsResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'createContentDocument' => [
            '200.' => 'Amz\\AplusContent\\Model\\PostContentDocumentResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'getContentDocument' => [
            '200.' => 'Amz\\AplusContent\\Model\\GetContentDocumentResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'updateContentDocument' => [
            '200.' => 'Amz\\AplusContent\\Model\\PostContentDocumentResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'listContentDocumentAsinRelations' => [
            '200.' => 'Amz\\AplusContent\\Model\\ListContentDocumentAsinRelationsResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'postContentDocumentAsinRelations' => [
            '200.' => 'Amz\\AplusContent\\Model\\PostContentDocumentAsinRelationsResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'validateContentDocumentAsinRelations' => [
            '200.' => 'Amz\\AplusContent\\Model\\ValidateContentDocumentAsinRelationsResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'searchContentPublishRecords' => [
            '200.' => 'Amz\\AplusContent\\Model\\SearchContentPublishRecordsResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'postContentDocumentApprovalSubmission' => [
            '200.' => 'Amz\\AplusContent\\Model\\PostContentDocumentApprovalSubmissionResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'postContentDocumentSuspendSubmission' => [
            '200.' => 'Amz\\AplusContent\\Model\\PostContentDocumentSuspendSubmissionResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
    ];
}
