<?php

namespace Amz\AplusContent\Api;

use Amz\AplusContent\Model\ErrorList;
use Amz\AplusContent\Model\GetContentDocumentResponse;
use Amz\AplusContent\Model\ListContentDocumentAsinRelationsResponse;
use Amz\AplusContent\Model\PostContentDocumentApprovalSubmissionResponse;
use Amz\AplusContent\Model\PostContentDocumentAsinRelationsRequest;
use Amz\AplusContent\Model\PostContentDocumentAsinRelationsResponse;
use Amz\AplusContent\Model\PostContentDocumentRequest;
use Amz\AplusContent\Model\PostContentDocumentResponse;
use Amz\AplusContent\Model\PostContentDocumentSuspendSubmissionResponse;
use Amz\AplusContent\Model\SearchContentDocumentsResponse;
use Amz\AplusContent\Model\SearchContentPublishRecordsResponse;
use Amz\AplusContent\Model\ValidateContentDocumentAsinRelationsResponse;

class AplusContent extends AbstractAPI
{
    /**
     * Returns a list of all A+ Content documents assigned to a selling partner. This
     * operation returns only the metadata of the A+ Content documents. Call the
     * getContentDocument operation to get the actual contents of the A+ Content
     * documents.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param array $queries options:
     *                       'marketplaceId'		The identifier for the marketplace where the A+ Content is
     *                       published.
     *                       'pageToken'		A page token from the nextPageToken response element returned by
     *                       your previous call to this operation. nextPageToken is returned when the results
     *                       of a call exceed the page size. To get the next page of results, call the
     *                       operation and include pageToken as the only parameter. Specifying pageToken with
     *                       any other parameter will cause the request to fail. When no nextPageToken value
     *                       is returned there are no more pages to return. A pageToken value is not usable
     *                       across different operations.
     *
     * @return SearchContentDocumentsResponse|ErrorList
     */
    public function searchContentDocuments(array $queries = [])
    {
        return $this->request(
        'searchContentDocuments',
        'GET',
        'aplus/2020-11-01/contentDocuments',
        null,
        $queries,
        []
        );
    }

    /**
     * Creates a new A+ Content document.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param PostContentDocumentRequest $Model Creates a new A+ Content document.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     * @param array $queries options:
     *                       'marketplaceId'		The identifier for the marketplace where the A+ Content is
     *                       published
     *
     * @return PostContentDocumentResponse|ErrorList
     */
    public function createContentDocument(PostContentDocumentRequest $Model, array $queries = [])
    {
        return $this->request(
        'createContentDocument',
        'POST',
        'aplus/2020-11-01/contentDocuments',
        null,
        $queries,
        []
        );
    }

    /**
     * Returns an A+ Content document, if available.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $contentReferenceKey The unique reference key for the A+ Content
     * document. A content reference key cannot form a permalink and may change in the
     * future. A content reference key is not guaranteed to match any A+ Content
     * identifier.
     * @param array $queries options:
     *                       'marketplaceId'		The identifier for the marketplace where the A+ Content is
     *                       published.
     *                       'includedDataSet'		The set of A+ Content data types to include in the response.
     *
     * @return GetContentDocumentResponse|ErrorList
     */
    public function getContentDocument($contentReferenceKey, array $queries = [])
    {
        return $this->request(
        'getContentDocument',
        'GET',
        "aplus/2020-11-01/contentDocuments/$contentReferenceKey",
        null,
        $queries,
        []
        );
    }

    /**
     * Updates an existing A+ Content document.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $contentReferenceKey The unique reference key for the A+ Content
     * document. A content reference key cannot form a permalink and may change in the
     * future. A content reference key is not guaranteed to match any A+ Content
     * identifier.
     * @param PostContentDocumentRequest $Model Updates an existing A+ Content
     *                                          document.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     * @param array $queries options:
     *                       'marketplaceId'		The identifier for the marketplace where the A+ Content is
     *                       published
     *
     * @return PostContentDocumentResponse|ErrorList
     */
    public function updateContentDocument($contentReferenceKey, PostContentDocumentRequest $Model, array $queries = [])
    {
        return $this->request(
        'updateContentDocument',
        'POST',
        "aplus/2020-11-01/contentDocuments/$contentReferenceKey",
        null,
        $queries,
        []
        );
    }

    /**
     * Returns a list of ASINs related to the specified A+ Content document, if
     * available. If you do not include the asinSet parameter, the operation returns
     * all ASINs related to the content document.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $contentReferenceKey The unique reference key for the A+ Content
     * document. A content reference key cannot form a permalink and may change in the
     * future. A content reference key is not guaranteed to match any A+ Content
     * identifier.
     * @param array $queries options:
     *                       'marketplaceId'		The identifier for the marketplace where the A+ Content is
     *                       published.
     *                       'includedDataSet'		The set of A+ Content data types to include in the response.
     *                       If you do not include this parameter, the operation returns the related ASINs
     *                       without metadata.
     *                       'asinSet'		The set of ASINs.
     *                       'pageToken'		A page token from the nextPageToken response element returned by
     *                       your previous call to this operation. nextPageToken is returned when the results
     *                       of a call exceed the page size. To get the next page of results, call the
     *                       operation and include pageToken as the only parameter. Specifying pageToken with
     *                       any other parameter will cause the request to fail. When no nextPageToken value
     *                       is returned there are no more pages to return. A pageToken value is not usable
     *                       across different operations.
     *
     * @return ListContentDocumentAsinRelationsResponse|ErrorList
     */
    public function listContentDocumentAsinRelations($contentReferenceKey, array $queries = [])
    {
        return $this->request(
        'listContentDocumentAsinRelations',
        'GET',
        "aplus/2020-11-01/contentDocuments/$contentReferenceKey/asins",
        null,
        $queries,
        []
        );
    }

    /**
     * Replaces all ASINs related to the specified A+ Content document, if available.
     * This may add or remove ASINs, depending on the current set of related ASINs.
     * Removing an ASIN has the side effect of suspending the content document from
     * that ASIN.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $contentReferenceKey The unique reference key for the A+ Content
     * document. A content reference key cannot form a permalink and may change in the
     * future. A content reference key is not guaranteed to match any A+ content
     * identifier.
     * @param PostContentDocumentAsinRelationsRequest $Model Replaces all ASINs
     *                                                       related to the specified A+ Content document, if available. This may add or
     *                                                       remove ASINs, depending on the current set of related ASINs. Removing an ASIN
     *                                                       has the side effect of suspending the content document from that ASIN.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     * @param array $queries options:
     *                       'marketplaceId'		The identifier for the marketplace where the A+ Content is
     *                       published
     *
     * @return PostContentDocumentAsinRelationsResponse|ErrorList
     */
    public function postContentDocumentAsinRelations($contentReferenceKey, PostContentDocumentAsinRelationsRequest $Model, array $queries = [])
    {
        return $this->request(
        'postContentDocumentAsinRelations',
        'POST',
        "aplus/2020-11-01/contentDocuments/$contentReferenceKey/asins",
        null,
        $queries,
        []
        );
    }

    /**
     * Checks if the A+ Content document is valid for use on a set of ASINs.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param PostContentDocumentRequest $Model Checks if the A+ Content document is
     *                                          valid for use on a set of ASINs.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     * @param array $queries options:
     *                       'marketplaceId'		The identifier for the marketplace where the A+ Content is
     *                       published.
     *                       'asinSet'		The set of ASINs.
     *
     * @return ValidateContentDocumentAsinRelationsResponse|ErrorList
     */
    public function validateContentDocumentAsinRelations(PostContentDocumentRequest $Model, array $queries = [])
    {
        return $this->request(
        'validateContentDocumentAsinRelations',
        'POST',
        'aplus/2020-11-01/contentAsinValidations',
        null,
        $queries,
        []
        );
    }

    /**
     * Searches for A+ Content publishing records, if available.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param array $queries options:
     *                       'marketplaceId'		The identifier for the marketplace where the A+ Content is
     *                       published.
     *                       'asin'		The Amazon Standard Identification Number (ASIN).
     *                       'pageToken'		A page token from the nextPageToken response element returned by
     *                       your previous call to this operation. nextPageToken is returned when the results
     *                       of a call exceed the page size. To get the next page of results, call the
     *                       operation and include pageToken as the only parameter. Specifying pageToken with
     *                       any other parameter will cause the request to fail. When no nextPageToken value
     *                       is returned there are no more pages to return. A pageToken value is not usable
     *                       across different operations.
     *
     * @return SearchContentPublishRecordsResponse|ErrorList
     */
    public function searchContentPublishRecords(array $queries = [])
    {
        return $this->request(
        'searchContentPublishRecords',
        'GET',
        'aplus/2020-11-01/contentPublishRecords',
        null,
        $queries,
        []
        );
    }

    /**
     * Submits an A+ Content document for review, approval, and publishing.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $contentReferenceKey The unique reference key for the A+ Content
     * document. A content reference key cannot form a permalink and may change in the
     * future. A content reference key is not guaranteed to match any A+ content
     * identifier.
     * @param array $queries options:
     *                       'marketplaceId'		The identifier for the marketplace where the A+ Content is
     *                       published
     *
     * @return PostContentDocumentApprovalSubmissionResponse|ErrorList
     */
    public function postContentDocumentApprovalSubmission($contentReferenceKey, array $queries = [])
    {
        return $this->request(
        'postContentDocumentApprovalSubmission',
        'POST',
        "aplus/2020-11-01/contentDocuments/$contentReferenceKey/approvalSubmissions",
        null,
        $queries,
        []
        );
    }

    /**
     * Submits a request to suspend visible A+ Content. This neither deletes the
     * content document nor the ASIN relations.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $contentReferenceKey The unique reference key for the A+ Content
     * document. A content reference key cannot form a permalink and may change in the
     * future. A content reference key is not guaranteed to match any A+ content
     * identifier.
     * @param array $queries options:
     *                       'marketplaceId'		The identifier for the marketplace where the A+ Content is
     *                       published
     *
     * @return PostContentDocumentSuspendSubmissionResponse|ErrorList
     */
    public function postContentDocumentSuspendSubmission($contentReferenceKey, array $queries = [])
    {
        return $this->request(
        'postContentDocumentSuspendSubmission',
        'POST',
        "aplus/2020-11-01/contentDocuments/$contentReferenceKey/suspendSubmissions",
        null,
        $queries,
        []
        );
    }
}
