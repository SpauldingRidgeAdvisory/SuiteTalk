<?php

namespace SpauldingRidge\SuiteTalk\Service;

class NetSuiteService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Passport' => 'SpauldingRidge\\SuiteTalk\\Service\\Passport',
      'TokenPassportSignature' => 'SpauldingRidge\\SuiteTalk\\Service\\TokenPassportSignature',
      'TokenPassport' => 'SpauldingRidge\\SuiteTalk\\Service\\TokenPassport',
      'ChangePassword' => 'SpauldingRidge\\SuiteTalk\\Service\\ChangePassword',
      'ChangeEmail' => 'SpauldingRidge\\SuiteTalk\\Service\\ChangeEmail',
      'StatusDetail' => 'SpauldingRidge\\SuiteTalk\\Service\\StatusDetail',
      'Status' => 'SpauldingRidge\\SuiteTalk\\Service\\Status',
      'WsRole' => 'SpauldingRidge\\SuiteTalk\\Service\\WsRole',
      'WsRoleList' => 'SpauldingRidge\\SuiteTalk\\Service\\WsRoleList',
      'Record' => 'SpauldingRidge\\SuiteTalk\\Service\\Record',
      'NullField' => 'SpauldingRidge\\SuiteTalk\\Service\\NullField',
      'SearchRecord' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchRecord',
      'SearchRecordBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchRecordBasic',
      'SearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchRowBasic',
      'SearchResult' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchResult',
      'AsyncStatusResult' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncStatusResult',
      'GetAllResult' => 'SpauldingRidge\\SuiteTalk\\Service\\GetAllResult',
      'GetSavedSearchResult' => 'SpauldingRidge\\SuiteTalk\\Service\\GetSavedSearchResult',
      'GetCustomizationIdResult' => 'SpauldingRidge\\SuiteTalk\\Service\\GetCustomizationIdResult',
      'GetSelectValueResult' => 'SpauldingRidge\\SuiteTalk\\Service\\GetSelectValueResult',
      'RecordList' => 'SpauldingRidge\\SuiteTalk\\Service\\RecordList',
      'SearchRowList' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchRowList',
      'RecordRefList' => 'SpauldingRidge\\SuiteTalk\\Service\\RecordRefList',
      'BaseRef' => 'SpauldingRidge\\SuiteTalk\\Service\\BaseRef',
      'BaseRefList' => 'SpauldingRidge\\SuiteTalk\\Service\\BaseRefList',
      'RecordRef' => 'SpauldingRidge\\SuiteTalk\\Service\\RecordRef',
      'Duration' => 'SpauldingRidge\\SuiteTalk\\Service\\Duration',
      'CustomRecordRef' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordRef',
      'CustomTransactionRef' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomTransactionRef',
      'CustomizationRef' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomizationRef',
      'CustomizationRefList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomizationRefList',
      'InitializeRecord' => 'SpauldingRidge\\SuiteTalk\\Service\\InitializeRecord',
      'InitializeRef' => 'SpauldingRidge\\SuiteTalk\\Service\\InitializeRef',
      'InitializeRefList' => 'SpauldingRidge\\SuiteTalk\\Service\\InitializeRefList',
      'InitializeAuxRef' => 'SpauldingRidge\\SuiteTalk\\Service\\InitializeAuxRef',
      'UpdateInviteeStatusReference' => 'SpauldingRidge\\SuiteTalk\\Service\\UpdateInviteeStatusReference',
      'GetAllRecord' => 'SpauldingRidge\\SuiteTalk\\Service\\GetAllRecord',
      'GetSavedSearchRecord' => 'SpauldingRidge\\SuiteTalk\\Service\\GetSavedSearchRecord',
      'CustomizationType' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomizationType',
      'ListOrRecordRef' => 'SpauldingRidge\\SuiteTalk\\Service\\ListOrRecordRef',
      'CustomFieldRef' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomFieldRef',
      'LongCustomFieldRef' => 'SpauldingRidge\\SuiteTalk\\Service\\LongCustomFieldRef',
      'DoubleCustomFieldRef' => 'SpauldingRidge\\SuiteTalk\\Service\\DoubleCustomFieldRef',
      'BooleanCustomFieldRef' => 'SpauldingRidge\\SuiteTalk\\Service\\BooleanCustomFieldRef',
      'StringCustomFieldRef' => 'SpauldingRidge\\SuiteTalk\\Service\\StringCustomFieldRef',
      'DateCustomFieldRef' => 'SpauldingRidge\\SuiteTalk\\Service\\DateCustomFieldRef',
      'SelectCustomFieldRef' => 'SpauldingRidge\\SuiteTalk\\Service\\SelectCustomFieldRef',
      'MultiSelectCustomFieldRef' => 'SpauldingRidge\\SuiteTalk\\Service\\MultiSelectCustomFieldRef',
      'CustomFieldList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomFieldList',
      'DimensionRef' => 'SpauldingRidge\\SuiteTalk\\Service\\DimensionRef',
      'StringDimensionRef' => 'SpauldingRidge\\SuiteTalk\\Service\\StringDimensionRef',
      'SelectDimensionRef' => 'SpauldingRidge\\SuiteTalk\\Service\\SelectDimensionRef',
      'DimensionList' => 'SpauldingRidge\\SuiteTalk\\Service\\DimensionList',
      'SearchBooleanField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchBooleanField',
      'SearchStringField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchStringField',
      'SearchLongField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchLongField',
      'SearchTextNumberField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchTextNumberField',
      'SearchDoubleField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchDoubleField',
      'SearchDateField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchDateField',
      'SearchEnumMultiSelectField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchEnumMultiSelectField',
      'SearchMultiSelectField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchMultiSelectField',
      'SearchCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchCustomField',
      'SearchBooleanCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchBooleanCustomField',
      'SearchStringCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchStringCustomField',
      'SearchLongCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchLongCustomField',
      'SearchDoubleCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchDoubleCustomField',
      'SearchDateCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchDateCustomField',
      'SearchEnumMultiSelectCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchEnumMultiSelectCustomField',
      'SearchMultiSelectCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchMultiSelectCustomField',
      'SearchCustomFieldList' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchCustomFieldList',
      'SearchColumnField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnField',
      'SearchColumnBooleanField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnBooleanField',
      'SearchColumnStringField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnStringField',
      'SearchColumnLongField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnLongField',
      'SearchColumnTextNumberField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnTextNumberField',
      'SearchColumnDoubleField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnDoubleField',
      'SearchColumnDateField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnDateField',
      'SearchColumnEnumSelectField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnEnumSelectField',
      'SearchColumnSelectField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnSelectField',
      'SearchColumnCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnCustomField',
      'SearchColumnBooleanCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnBooleanCustomField',
      'SearchColumnStringCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnStringCustomField',
      'SearchColumnLongCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnLongCustomField',
      'SearchColumnDoubleCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnDoubleCustomField',
      'SearchColumnDateCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnDateCustomField',
      'SearchColumnEnumMultiSelectCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnEnumMultiSelectCustomField',
      'SearchColumnSelectCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnSelectCustomField',
      'SearchColumnMultiSelectCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnMultiSelectCustomField',
      'SearchColumnCustomFieldList' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchColumnCustomFieldList',
      'ItemAvailabilityFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemAvailabilityFilter',
      'ItemAvailability' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemAvailability',
      'ItemAvailabilityList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemAvailabilityList',
      'GetItemAvailabilityResult' => 'SpauldingRidge\\SuiteTalk\\Service\\GetItemAvailabilityResult',
      'BudgetExchangeRateFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\BudgetExchangeRateFilter',
      'BudgetExchangeRate' => 'SpauldingRidge\\SuiteTalk\\Service\\BudgetExchangeRate',
      'BudgetExchangeRateList' => 'SpauldingRidge\\SuiteTalk\\Service\\BudgetExchangeRateList',
      'GetBudgetExchangeRateResult' => 'SpauldingRidge\\SuiteTalk\\Service\\GetBudgetExchangeRateResult',
      'CurrencyRateFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\CurrencyRateFilter',
      'CurrencyRate' => 'SpauldingRidge\\SuiteTalk\\Service\\CurrencyRate',
      'CurrencyRateList' => 'SpauldingRidge\\SuiteTalk\\Service\\CurrencyRateList',
      'GetCurrencyRateResult' => 'SpauldingRidge\\SuiteTalk\\Service\\GetCurrencyRateResult',
      'DataCenterUrls' => 'SpauldingRidge\\SuiteTalk\\Service\\DataCenterUrls',
      'GetDataCenterUrlsResult' => 'SpauldingRidge\\SuiteTalk\\Service\\GetDataCenterUrlsResult',
      'PostingTransactionSummaryField' => 'SpauldingRidge\\SuiteTalk\\Service\\PostingTransactionSummaryField',
      'PostingTransactionSummaryFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\PostingTransactionSummaryFilter',
      'PostingTransactionSummary' => 'SpauldingRidge\\SuiteTalk\\Service\\PostingTransactionSummary',
      'PostingTransactionSummaryList' => 'SpauldingRidge\\SuiteTalk\\Service\\PostingTransactionSummaryList',
      'GetPostingTransactionSummaryResult' => 'SpauldingRidge\\SuiteTalk\\Service\\GetPostingTransactionSummaryResult',
      'GetSelectValueFieldDescription' => 'SpauldingRidge\\SuiteTalk\\Service\\GetSelectValueFieldDescription',
      'GetSelectValueFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\GetSelectValueFilter',
      'GetSelectFilterByFieldValueList' => 'SpauldingRidge\\SuiteTalk\\Service\\GetSelectFilterByFieldValueList',
      'GetSelectFilterByFieldValue' => 'SpauldingRidge\\SuiteTalk\\Service\\GetSelectFilterByFieldValue',
      'GetServerTimeResult' => 'SpauldingRidge\\SuiteTalk\\Service\\GetServerTimeResult',
      'DeletedRecord' => 'SpauldingRidge\\SuiteTalk\\Service\\DeletedRecord',
      'DeletedRecordList' => 'SpauldingRidge\\SuiteTalk\\Service\\DeletedRecordList',
      'GetDeletedResult' => 'SpauldingRidge\\SuiteTalk\\Service\\GetDeletedResult',
      'GetDeletedFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\GetDeletedFilter',
      'AttachReference' => 'SpauldingRidge\\SuiteTalk\\Service\\AttachReference',
      'DetachReference' => 'SpauldingRidge\\SuiteTalk\\Service\\DetachReference',
      'AttachContactReference' => 'SpauldingRidge\\SuiteTalk\\Service\\AttachContactReference',
      'AttachBasicReference' => 'SpauldingRidge\\SuiteTalk\\Service\\AttachBasicReference',
      'DetachBasicReference' => 'SpauldingRidge\\SuiteTalk\\Service\\DetachBasicReference',
      'DeletionReason' => 'SpauldingRidge\\SuiteTalk\\Service\\DeletionReason',
      'GetAccountGovernanceInfoResult' => 'SpauldingRidge\\SuiteTalk\\Service\\GetAccountGovernanceInfoResult',
      'GetIntegrationGovernanceInfoResult' => 'SpauldingRidge\\SuiteTalk\\Service\\GetIntegrationGovernanceInfoResult',
      'SoapFault' => 'SpauldingRidge\\SuiteTalk\\Service\\SoapFault',
      'InsufficientPermissionFault' => 'SpauldingRidge\\SuiteTalk\\Service\\InsufficientPermissionFault',
      'InvalidAccountFault' => 'SpauldingRidge\\SuiteTalk\\Service\\InvalidAccountFault',
      'InvalidCredentialsFault' => 'SpauldingRidge\\SuiteTalk\\Service\\InvalidCredentialsFault',
      'InvalidSessionFault' => 'SpauldingRidge\\SuiteTalk\\Service\\InvalidSessionFault',
      'ExceededConcurrentRequestLimitFault' => 'SpauldingRidge\\SuiteTalk\\Service\\ExceededConcurrentRequestLimitFault',
      'ExceededRequestLimitFault' => 'SpauldingRidge\\SuiteTalk\\Service\\ExceededRequestLimitFault',
      'ExceededUsageLimitFault' => 'SpauldingRidge\\SuiteTalk\\Service\\ExceededUsageLimitFault',
      'ExceededRecordCountFault' => 'SpauldingRidge\\SuiteTalk\\Service\\ExceededRecordCountFault',
      'InvalidVersionFault' => 'SpauldingRidge\\SuiteTalk\\Service\\InvalidVersionFault',
      'ExceededRequestSizeFault' => 'SpauldingRidge\\SuiteTalk\\Service\\ExceededRequestSizeFault',
      'AsyncFault' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncFault',
      'UnexpectedErrorFault' => 'SpauldingRidge\\SuiteTalk\\Service\\UnexpectedErrorFault',
      'ApplicationInfo' => 'SpauldingRidge\\SuiteTalk\\Service\\ApplicationInfo',
      'PartnerInfo' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerInfo',
      'DocumentInfo' => 'SpauldingRidge\\SuiteTalk\\Service\\DocumentInfo',
      'Preferences' => 'SpauldingRidge\\SuiteTalk\\Service\\Preferences',
      'SearchPreferences' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchPreferences',
      'SessionResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\SessionResponse',
      'WriteResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\WriteResponse',
      'ReadResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\ReadResponse',
      'WriteResponseList' => 'SpauldingRidge\\SuiteTalk\\Service\\WriteResponseList',
      'ReadResponseList' => 'SpauldingRidge\\SuiteTalk\\Service\\ReadResponseList',
      'ChangePasswordResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\ChangePasswordResponse',
      'ChangeEmailResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\ChangeEmailResponse',
      'AddResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\AddResponse',
      'AddListResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\AddListResponse',
      'UpdateResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\UpdateResponse',
      'UpdateListResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\UpdateListResponse',
      'UpsertResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\UpsertResponse',
      'UpsertListResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\UpsertListResponse',
      'DeleteResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\DeleteResponse',
      'DeleteListResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\DeleteListResponse',
      'SearchResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchResponse',
      'SearchMoreWithIdResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchMoreWithIdResponse',
      'GetResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetResponse',
      'GetListResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetListResponse',
      'GetAllResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetAllResponse',
      'GetSavedSearchResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetSavedSearchResponse',
      'GetCustomizationIdResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetCustomizationIdResponse',
      'InitializeResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\InitializeResponse',
      'InitializeListResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\InitializeListResponse',
      'getSelectValueResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\getSelectValueResponse',
      'GetItemAvailabilityResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetItemAvailabilityResponse',
      'GetBudgetExchangeRateResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetBudgetExchangeRateResponse',
      'GetCurrencyRateResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetCurrencyRateResponse',
      'GetDataCenterUrlsResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetDataCenterUrlsResponse',
      'GetPostingTransactionSummaryResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetPostingTransactionSummaryResponse',
      'GetServerTimeResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetServerTimeResponse',
      'AttachResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\AttachResponse',
      'DetachResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\DetachResponse',
      'UpdateInviteeStatusResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\UpdateInviteeStatusResponse',
      'UpdateInviteeStatusListResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\UpdateInviteeStatusListResponse',
      'AsyncStatusResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncStatusResponse',
      'GetAsyncResultResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetAsyncResultResponse',
      'AsyncResult' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncResult',
      'AsyncAddListResult' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncAddListResult',
      'AsyncUpdateListResult' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncUpdateListResult',
      'AsyncUpsertListResult' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncUpsertListResult',
      'AsyncDeleteListResult' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncDeleteListResult',
      'AsyncGetListResult' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncGetListResult',
      'AsyncSearchResult' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncSearchResult',
      'AsyncInitializeListResult' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncInitializeListResult',
      'GetDeletedResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetDeletedResponse',
      'GetAccountGovernanceInfoResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetAccountGovernanceInfoResponse',
      'GetIntegrationGovernanceInfoResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\GetIntegrationGovernanceInfoResponse',
      'ChangePasswordRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\ChangePasswordRequest',
      'ChangeEmailRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\ChangeEmailRequest',
      'AddRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\AddRequest',
      'DeleteRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\DeleteRequest',
      'SearchRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchRequest',
      'SearchMoreWithIdRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\SearchMoreWithIdRequest',
      'UpdateRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\UpdateRequest',
      'UpsertRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\UpsertRequest',
      'AddListRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\AddListRequest',
      'DeleteListRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\DeleteListRequest',
      'UpdateListRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\UpdateListRequest',
      'UpsertListRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\UpsertListRequest',
      'GetRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetRequest',
      'GetListRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetListRequest',
      'GetAllRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetAllRequest',
      'GetSavedSearchRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetSavedSearchRequest',
      'GetCustomizationIdRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetCustomizationIdRequest',
      'InitializeRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\InitializeRequest',
      'InitializeListRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\InitializeListRequest',
      'getSelectValueRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\getSelectValueRequest',
      'GetItemAvailabilityRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetItemAvailabilityRequest',
      'GetBudgetExchangeRateRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetBudgetExchangeRateRequest',
      'GetCurrencyRateRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetCurrencyRateRequest',
      'GetDataCenterUrlsRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetDataCenterUrlsRequest',
      'GetPostingTransactionSummaryRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetPostingTransactionSummaryRequest',
      'GetServerTimeRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetServerTimeRequest',
      'AttachRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\AttachRequest',
      'DetachRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\DetachRequest',
      'AsyncAddListRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncAddListRequest',
      'UpdateInviteeStatusRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\UpdateInviteeStatusRequest',
      'UpdateInviteeStatusListRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\UpdateInviteeStatusListRequest',
      'AsyncUpdateListRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncUpdateListRequest',
      'AsyncUpsertListRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncUpsertListRequest',
      'AsyncDeleteListRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncDeleteListRequest',
      'AsyncGetListRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncGetListRequest',
      'AsyncInitializeListRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncInitializeListRequest',
      'AsyncSearchRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\AsyncSearchRequest',
      'CheckAsyncStatusRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\CheckAsyncStatusRequest',
      'GetAsyncResultRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetAsyncResultRequest',
      'GetDeletedRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetDeletedRequest',
      'GetAccountGovernanceInfoRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetAccountGovernanceInfoRequest',
      'GetIntegrationGovernanceInfoRequest' => 'SpauldingRidge\\SuiteTalk\\Service\\GetIntegrationGovernanceInfoRequest',
      'Address' => 'SpauldingRidge\\SuiteTalk\\Service\\Address',
      'PresentationItem' => 'SpauldingRidge\\SuiteTalk\\Service\\PresentationItem',
      'Partners' => 'SpauldingRidge\\SuiteTalk\\Service\\Partners',
      'LandedCost' => 'SpauldingRidge\\SuiteTalk\\Service\\LandedCost',
      'LandedCostDataList' => 'SpauldingRidge\\SuiteTalk\\Service\\LandedCostDataList',
      'LandedCostData' => 'SpauldingRidge\\SuiteTalk\\Service\\LandedCostData',
      'LandedCostSummary' => 'SpauldingRidge\\SuiteTalk\\Service\\LandedCostSummary',
      'PurchLandedCostList' => 'SpauldingRidge\\SuiteTalk\\Service\\PurchLandedCostList',
      'CustomerSalesTeam' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerSalesTeam',
      'TimeItem' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeItem',
      'InventoryDetail' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryDetail',
      'RecurrenceDowMaskList' => 'SpauldingRidge\\SuiteTalk\\Service\\RecurrenceDowMaskList',
      'AccountingBookDetail' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingBookDetail',
      'AccountingBookDetailList' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingBookDetailList',
      'InventoryAssignmentList' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryAssignmentList',
      'InventoryAssignment' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryAssignment',
      'Promotions' => 'SpauldingRidge\\SuiteTalk\\Service\\Promotions',
      'PromotionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\PromotionsList',
      'InventoryDetailSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryDetailSearchBasic',
      'Installment' => 'SpauldingRidge\\SuiteTalk\\Service\\Installment',
      'InstallmentList' => 'SpauldingRidge\\SuiteTalk\\Service\\InstallmentList',
      'InventoryDetailSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryDetailSearchRowBasic',
      'EntitySearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\EntitySearchBasic',
      'EntitySearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\EntitySearchRowBasic',
      'ContactSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactSearchBasic',
      'ContactSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactSearchRowBasic',
      'CustomerSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerSearchBasic',
      'CustomerSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerSearchRowBasic',
      'CalendarEventSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CalendarEventSearchBasic',
      'CalendarEventSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CalendarEventSearchRowBasic',
      'TaskSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TaskSearchBasic',
      'TaskSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TaskSearchRowBasic',
      'OpportunitySearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\OpportunitySearchBasic',
      'OpportunitySearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\OpportunitySearchRowBasic',
      'EmployeeSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeSearchBasic',
      'EmployeeSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeSearchRowBasic',
      'PhoneCallSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PhoneCallSearchBasic',
      'PhoneCallSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PhoneCallSearchRowBasic',
      'SupportCaseSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseSearchBasic',
      'SupportCaseSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseSearchRowBasic',
      'MessageSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\MessageSearchBasic',
      'MessageSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\MessageSearchRowBasic',
      'NoteSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\NoteSearchBasic',
      'NoteSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\NoteSearchRowBasic',
      'CustomRecordSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordSearchBasic',
      'CustomRecordSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordSearchRowBasic',
      'AccountSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountSearchBasic',
      'AccountSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountSearchRowBasic',
      'RevRecScheduleSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecScheduleSearchBasic',
      'RevRecScheduleSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecScheduleSearchRowBasic',
      'RevRecTemplateSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecTemplateSearchBasic',
      'RevRecTemplateSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecTemplateSearchRowBasic',
      'BinSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BinSearchBasic',
      'BinSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BinSearchRowBasic',
      'DepartmentSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\DepartmentSearchBasic',
      'DepartmentSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\DepartmentSearchRowBasic',
      'LocationSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\LocationSearchBasic',
      'LocationSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\LocationSearchRowBasic',
      'ClassificationSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ClassificationSearchBasic',
      'ClassificationSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ClassificationSearchRowBasic',
      'TransactionSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TransactionSearchBasic',
      'TransactionSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TransactionSearchRowBasic',
      'ItemSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemSearchBasic',
      'ItemSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemSearchRowBasic',
      'PartnerSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerSearchBasic',
      'PartnerSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerSearchRowBasic',
      'VendorSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorSearchBasic',
      'VendorSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorSearchRowBasic',
      'SiteCategorySearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SiteCategorySearchBasic',
      'SiteCategorySearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SiteCategorySearchRowBasic',
      'TimeBillSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeBillSearchBasic',
      'TimeBillSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeBillSearchRowBasic',
      'SolutionSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SolutionSearchBasic',
      'SolutionSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SolutionSearchRowBasic',
      'TopicSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TopicSearchBasic',
      'TopicSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TopicSearchRowBasic',
      'SubsidiarySearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SubsidiarySearchBasic',
      'SubsidiarySearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SubsidiarySearchRowBasic',
      'GiftCertificateSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\GiftCertificateSearchBasic',
      'GiftCertificateSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\GiftCertificateSearchRowBasic',
      'FolderSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\FolderSearchBasic',
      'FolderSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\FolderSearchRowBasic',
      'FileSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\FileSearchBasic',
      'FileSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\FileSearchRowBasic',
      'JobSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\JobSearchBasic',
      'JobSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\JobSearchRowBasic',
      'IssueSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\IssueSearchBasic',
      'IssueSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\IssueSearchRowBasic',
      'GroupMemberSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\GroupMemberSearchBasic',
      'CampaignSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignSearchBasic',
      'CampaignSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignSearchRowBasic',
      'EntityGroupSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\EntityGroupSearchBasic',
      'EntityGroupSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\EntityGroupSearchRowBasic',
      'PromotionCodeSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PromotionCodeSearchBasic',
      'PromotionCodeSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PromotionCodeSearchRowBasic',
      'BudgetSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BudgetSearchBasic',
      'BudgetSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BudgetSearchRowBasic',
      'ProjectTaskSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ProjectTaskSearchBasic',
      'ProjectTaskSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ProjectTaskSearchRowBasic',
      'ProjectTaskAssignmentSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ProjectTaskAssignmentSearchBasic',
      'ProjectTaskAssignmentSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ProjectTaskAssignmentSearchRowBasic',
      'AccountingPeriodSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingPeriodSearchBasic',
      'AccountingPeriodSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingPeriodSearchRowBasic',
      'ContactCategorySearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactCategorySearchBasic',
      'ContactCategorySearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactCategorySearchRowBasic',
      'ContactRoleSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactRoleSearchBasic',
      'ContactRoleSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactRoleSearchRowBasic',
      'CustomerCategorySearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerCategorySearchBasic',
      'CustomerCategorySearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerCategorySearchRowBasic',
      'CustomerStatusSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerStatusSearchBasic',
      'CustomerStatusSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerStatusSearchRowBasic',
      'ExpenseCategorySearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ExpenseCategorySearchBasic',
      'ExpenseCategorySearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ExpenseCategorySearchRowBasic',
      'JobStatusSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\JobStatusSearchBasic',
      'JobStatusSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\JobStatusSearchRowBasic',
      'JobTypeSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\JobTypeSearchBasic',
      'JobTypeSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\JobTypeSearchRowBasic',
      'NoteTypeSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\NoteTypeSearchBasic',
      'NoteTypeSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\NoteTypeSearchRowBasic',
      'PartnerCategorySearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerCategorySearchBasic',
      'PartnerCategorySearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerCategorySearchRowBasic',
      'PaymentMethodSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentMethodSearchBasic',
      'PaymentMethodSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentMethodSearchRowBasic',
      'PriceLevelSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PriceLevelSearchBasic',
      'PriceLevelSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PriceLevelSearchRowBasic',
      'SalesRoleSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesRoleSearchBasic',
      'SalesRoleSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesRoleSearchRowBasic',
      'TermSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TermSearchBasic',
      'TermSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TermSearchRowBasic',
      'VendorCategorySearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCategorySearchBasic',
      'VendorCategorySearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCategorySearchRowBasic',
      'WinLossReasonSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\WinLossReasonSearchBasic',
      'WinLossReasonSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\WinLossReasonSearchRowBasic',
      'OriginatingLeadSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\OriginatingLeadSearchBasic',
      'OriginatingLeadSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\OriginatingLeadSearchRowBasic',
      'UnitsTypeSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\UnitsTypeSearchBasic',
      'UnitsTypeSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\UnitsTypeSearchRowBasic',
      'CustomListSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomListSearchBasic',
      'CustomListSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomListSearchRowBasic',
      'PricingGroupSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PricingGroupSearchBasic',
      'PricingGroupSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PricingGroupSearchRowBasic',
      'InventoryNumberSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryNumberSearchBasic',
      'InventoryNumberSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryNumberSearchRowBasic',
      'InventoryNumberBinSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryNumberBinSearchBasic',
      'InventoryNumberBinSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryNumberBinSearchRowBasic',
      'ItemBinNumberSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemBinNumberSearchBasic',
      'ItemBinNumberSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemBinNumberSearchRowBasic',
      'PricingSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PricingSearchBasic',
      'PricingSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PricingSearchRowBasic',
      'NexusSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\NexusSearchBasic',
      'NexusSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\NexusSearchRowBasic',
      'OtherNameCategorySearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherNameCategorySearchBasic',
      'OtherNameCategorySearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherNameCategorySearchRowBasic',
      'CustomerMessageSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerMessageSearchBasic',
      'CustomerMessageSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerMessageSearchRowBasic',
      'ItemDemandPlanSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemDemandPlanSearchBasic',
      'ItemDemandPlanSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemDemandPlanSearchRowBasic',
      'ItemSupplyPlanSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemSupplyPlanSearchBasic',
      'ItemSupplyPlanSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemSupplyPlanSearchRowBasic',
      'CurrencyRateSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CurrencyRateSearchBasic',
      'CurrencyRateSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CurrencyRateSearchRowBasic',
      'ItemRevisionSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemRevisionSearchBasic',
      'ItemRevisionSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemRevisionSearchRowBasic',
      'CouponCodeSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CouponCodeSearchBasic',
      'CouponCodeSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CouponCodeSearchRowBasic',
      'PayrollItemSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PayrollItemSearchBasic',
      'PayrollItemSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PayrollItemSearchRowBasic',
      'ManufacturingCostTemplateSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingCostTemplateSearchBasic',
      'ManufacturingCostTemplateSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingCostTemplateSearchRowBasic',
      'ManufacturingRoutingSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingRoutingSearchBasic',
      'ManufacturingRoutingSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingRoutingSearchRowBasic',
      'ManufacturingOperationTaskSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingOperationTaskSearchBasic',
      'ManufacturingOperationTaskSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingOperationTaskSearchRowBasic',
      'ResourceAllocationSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ResourceAllocationSearchBasic',
      'ResourceAllocationSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ResourceAllocationSearchRowBasic',
      'CustomSearchJoin' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomSearchJoin',
      'CustomSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomSearchRowBasic',
      'ChargeSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ChargeSearchBasic',
      'ChargeSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ChargeSearchRowBasic',
      'BillingScheduleSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingScheduleSearchBasic',
      'BillingScheduleSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingScheduleSearchRowBasic',
      'GlobalAccountMappingSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\GlobalAccountMappingSearchBasic',
      'GlobalAccountMappingSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\GlobalAccountMappingSearchRowBasic',
      'ItemAccountMappingSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemAccountMappingSearchBasic',
      'ItemAccountMappingSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemAccountMappingSearchRowBasic',
      'TimeEntrySearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeEntrySearchBasic',
      'TimeEntrySearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeEntrySearchRowBasic',
      'TimeSheetSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeSheetSearchBasic',
      'TimeSheetSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeSheetSearchRowBasic',
      'AccountingTransactionSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingTransactionSearchBasic',
      'AccountingTransactionSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingTransactionSearchRowBasic',
      'AddressSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\AddressSearchBasic',
      'AddressSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\AddressSearchRowBasic',
      'BillingAccountSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingAccountSearchBasic',
      'BillingAccountSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingAccountSearchRowBasic',
      'FairValuePriceSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\FairValuePriceSearchBasic',
      'FairValuePriceSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\FairValuePriceSearchRowBasic',
      'UsageSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\UsageSearchBasic',
      'UsageSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\UsageSearchRowBasic',
      'CostCategorySearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CostCategorySearchBasic',
      'CostCategorySearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CostCategorySearchRowBasic',
      'ConsolidatedExchangeRateSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ConsolidatedExchangeRateSearchBasic',
      'ConsolidatedExchangeRateSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\ConsolidatedExchangeRateSearchRowBasic',
      'TaxDetails' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxDetails',
      'TaxDetailsList' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxDetailsList',
      'TaxDetailSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxDetailSearchBasic',
      'TaxDetailSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxDetailSearchRowBasic',
      'TaxGroupSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxGroupSearchBasic',
      'TaxGroupSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxGroupSearchRowBasic',
      'SalesTaxItemSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesTaxItemSearchBasic',
      'SalesTaxItemSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesTaxItemSearchRowBasic',
      'TaxTypeSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxTypeSearchBasic',
      'TaxTypeSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxTypeSearchRowBasic',
      'PaycheckSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckSearchBasic',
      'PaycheckSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckSearchRowBasic',
      'HcmJobSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\HcmJobSearchBasic',
      'HcmJobSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\HcmJobSearchRowBasic',
      'BomSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BomSearchBasic',
      'BomSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BomSearchRowBasic',
      'BomRevisionSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BomRevisionSearchBasic',
      'BomRevisionSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BomRevisionSearchRowBasic',
      'BomRevisionComponentSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BomRevisionComponentSearchBasic',
      'BomRevisionComponentSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\BomRevisionComponentSearchRowBasic',
      'InboundShipmentSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\InboundShipmentSearchBasic',
      'InboundShipmentSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\InboundShipmentSearchRowBasic',
      'AssemblyItemBomSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\AssemblyItemBomSearchBasic',
      'AssemblyItemBomSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\AssemblyItemBomSearchRowBasic',
      'MseSubsidiarySearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\MseSubsidiarySearchBasic',
      'MseSubsidiarySearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\MseSubsidiarySearchRowBasic',
      'EntityTaxRegistrationSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\EntityTaxRegistrationSearchBasic',
      'EntityTaxRegistrationSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\EntityTaxRegistrationSearchRowBasic',
      'MerchandiseHierarchyNodeSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\MerchandiseHierarchyNodeSearchBasic',
      'MerchandiseHierarchyNodeSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\MerchandiseHierarchyNodeSearchRowBasic',
      'CustomerSubsidiaryRelationshipSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerSubsidiaryRelationshipSearchBasic',
      'CustomerSubsidiaryRelationshipSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerSubsidiaryRelationshipSearchRowBasic',
      'VendorSubsidiaryRelationshipSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorSubsidiaryRelationshipSearchBasic',
      'VendorSubsidiaryRelationshipSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorSubsidiaryRelationshipSearchRowBasic',
      'GiftCertRedemption' => 'SpauldingRidge\\SuiteTalk\\Service\\GiftCertRedemption',
      'GiftCertRedemptionList' => 'SpauldingRidge\\SuiteTalk\\Service\\GiftCertRedemptionList',
      'InstallmentSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\InstallmentSearchBasic',
      'InstallmentSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\InstallmentSearchRowBasic',
      'PaymentInstrumentSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentInstrumentSearchBasic',
      'PaymentInstrumentSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentInstrumentSearchRowBasic',
      'PaymentOptionSearchBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentOptionSearchBasic',
      'PaymentOptionSearchRowBasic' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentOptionSearchRowBasic',
      'CalendarEvent' => 'SpauldingRidge\\SuiteTalk\\Service\\CalendarEvent',
      'ExclusionDateList' => 'SpauldingRidge\\SuiteTalk\\Service\\ExclusionDateList',
      'CalendarEventAttendee' => 'SpauldingRidge\\SuiteTalk\\Service\\CalendarEventAttendee',
      'CalendarEventAttendeeList' => 'SpauldingRidge\\SuiteTalk\\Service\\CalendarEventAttendeeList',
      'CalendarEventResource' => 'SpauldingRidge\\SuiteTalk\\Service\\CalendarEventResource',
      'CalendarEventResourceList' => 'SpauldingRidge\\SuiteTalk\\Service\\CalendarEventResourceList',
      'CalendarEventSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\CalendarEventSearch',
      'CalendarEventSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\CalendarEventSearchAdvanced',
      'CalendarEventSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\CalendarEventSearchRow',
      'Task' => 'SpauldingRidge\\SuiteTalk\\Service\\Task',
      'TaskContact' => 'SpauldingRidge\\SuiteTalk\\Service\\TaskContact',
      'TaskContactList' => 'SpauldingRidge\\SuiteTalk\\Service\\TaskContactList',
      'TaskSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\TaskSearch',
      'TaskSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\TaskSearchAdvanced',
      'TaskSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\TaskSearchRow',
      'PhoneCall' => 'SpauldingRidge\\SuiteTalk\\Service\\PhoneCall',
      'PhoneCallContact' => 'SpauldingRidge\\SuiteTalk\\Service\\PhoneCallContact',
      'PhoneCallContactList' => 'SpauldingRidge\\SuiteTalk\\Service\\PhoneCallContactList',
      'PhoneCallSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\PhoneCallSearch',
      'PhoneCallSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\PhoneCallSearchAdvanced',
      'PhoneCallSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\PhoneCallSearchRow',
      'ProjectTask' => 'SpauldingRidge\\SuiteTalk\\Service\\ProjectTask',
      'ProjectTaskPredecessor' => 'SpauldingRidge\\SuiteTalk\\Service\\ProjectTaskPredecessor',
      'ProjectTaskPredecessorList' => 'SpauldingRidge\\SuiteTalk\\Service\\ProjectTaskPredecessorList',
      'ProjectTaskAssignee' => 'SpauldingRidge\\SuiteTalk\\Service\\ProjectTaskAssignee',
      'ProjectTaskAssigneeList' => 'SpauldingRidge\\SuiteTalk\\Service\\ProjectTaskAssigneeList',
      'ProjectTaskSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ProjectTaskSearch',
      'ProjectTaskSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ProjectTaskSearchAdvanced',
      'ProjectTaskSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ProjectTaskSearchRow',
      'PhoneCallTimeItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\PhoneCallTimeItemList',
      'CalendarEventTimeItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\CalendarEventTimeItemList',
      'TaskTimeItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\TaskTimeItemList',
      'ProjectTaskTimeItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\ProjectTaskTimeItemList',
      'ResourceAllocation' => 'SpauldingRidge\\SuiteTalk\\Service\\ResourceAllocation',
      'ResourceAllocationSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ResourceAllocationSearch',
      'ResourceAllocationSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ResourceAllocationSearchAdvanced',
      'ResourceAllocationSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ResourceAllocationSearchRow',
      'File' => 'SpauldingRidge\\SuiteTalk\\Service\\File',
      'FileSiteCategory' => 'SpauldingRidge\\SuiteTalk\\Service\\FileSiteCategory',
      'FileSiteCategoryList' => 'SpauldingRidge\\SuiteTalk\\Service\\FileSiteCategoryList',
      'FileSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\FileSearch',
      'FileSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\FileSearchAdvanced',
      'FileSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\FileSearchRow',
      'Folder' => 'SpauldingRidge\\SuiteTalk\\Service\\Folder',
      'FolderSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\FolderSearch',
      'FolderSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\FolderSearchAdvanced',
      'FolderSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\FolderSearchRow',
      'Note' => 'SpauldingRidge\\SuiteTalk\\Service\\Note',
      'NoteSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\NoteSearch',
      'NoteSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\NoteSearchAdvanced',
      'NoteSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\NoteSearchRow',
      'Message' => 'SpauldingRidge\\SuiteTalk\\Service\\Message',
      'MessageMediaItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\MessageMediaItemList',
      'MessageSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\MessageSearch',
      'MessageSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\MessageSearchAdvanced',
      'MessageSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\MessageSearchRow',
      'Subscriptions' => 'SpauldingRidge\\SuiteTalk\\Service\\Subscriptions',
      'SubscriptionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\SubscriptionsList',
      'Contact' => 'SpauldingRidge\\SuiteTalk\\Service\\Contact',
      'CategoryList' => 'SpauldingRidge\\SuiteTalk\\Service\\CategoryList',
      'ContactAddressbook' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactAddressbook',
      'ContactAddressbookList' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactAddressbookList',
      'ContactSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactSearch',
      'ContactSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactSearchAdvanced',
      'ContactSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactSearchRow',
      'Customer' => 'SpauldingRidge\\SuiteTalk\\Service\\Customer',
      'CustomerDownload' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerDownload',
      'CustomerDownloadList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerDownloadList',
      'ContactAccessRoles' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactAccessRoles',
      'ContactAccessRolesList' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactAccessRolesList',
      'CustomerSalesTeamList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerSalesTeamList',
      'CustomerAddressbook' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerAddressbook',
      'CustomerAddressbookList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerAddressbookList',
      'CustomerCreditCards' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerCreditCards',
      'CustomerCreditCardsList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerCreditCardsList',
      'CustomerGroupPricing' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerGroupPricing',
      'CustomerGroupPricingList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerGroupPricingList',
      'CustomerItemPricing' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerItemPricing',
      'CustomerItemPricingList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerItemPricingList',
      'CustomerPartnersList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerPartnersList',
      'CustomerSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerSearch',
      'CustomerSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerSearchAdvanced',
      'CustomerSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerSearchRow',
      'CustomerStatus' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerStatus',
      'Partner' => 'SpauldingRidge\\SuiteTalk\\Service\\Partner',
      'PartnerPromoCode' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerPromoCode',
      'PartnerPromoCodeList' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerPromoCodeList',
      'PartnerAddressbook' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerAddressbook',
      'PartnerAddressbookList' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerAddressbookList',
      'PartnerSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerSearch',
      'PartnerSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerSearchAdvanced',
      'PartnerSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerSearchRow',
      'Vendor' => 'SpauldingRidge\\SuiteTalk\\Service\\Vendor',
      'VendorPricingSchedule' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorPricingSchedule',
      'VendorPricingScheduleList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorPricingScheduleList',
      'VendorAddressbook' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorAddressbook',
      'VendorAddressbookList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorAddressbookList',
      'VendorRoles' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorRoles',
      'VendorRolesList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorRolesList',
      'VendorSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorSearch',
      'VendorSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorSearchAdvanced',
      'VendorSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorSearchRow',
      'EntityGroup' => 'SpauldingRidge\\SuiteTalk\\Service\\EntityGroup',
      'EntityGroupSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\EntityGroupSearch',
      'EntityGroupSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\EntityGroupSearchAdvanced',
      'EntityGroupSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\EntityGroupSearchRow',
      'Job' => 'SpauldingRidge\\SuiteTalk\\Service\\Job',
      'JobAddressbook' => 'SpauldingRidge\\SuiteTalk\\Service\\JobAddressbook',
      'JobAddressbookList' => 'SpauldingRidge\\SuiteTalk\\Service\\JobAddressbookList',
      'JobResources' => 'SpauldingRidge\\SuiteTalk\\Service\\JobResources',
      'JobResourcesList' => 'SpauldingRidge\\SuiteTalk\\Service\\JobResourcesList',
      'JobMilestones' => 'SpauldingRidge\\SuiteTalk\\Service\\JobMilestones',
      'JobMilestonesList' => 'SpauldingRidge\\SuiteTalk\\Service\\JobMilestonesList',
      'JobCreditCards' => 'SpauldingRidge\\SuiteTalk\\Service\\JobCreditCards',
      'JobCreditCardsList' => 'SpauldingRidge\\SuiteTalk\\Service\\JobCreditCardsList',
      'JobSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\JobSearch',
      'JobSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\JobSearchAdvanced',
      'JobSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\JobSearchRow',
      'JobType' => 'SpauldingRidge\\SuiteTalk\\Service\\JobType',
      'JobStatus' => 'SpauldingRidge\\SuiteTalk\\Service\\JobStatus',
      'CustomerStatusSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerStatusSearch',
      'CustomerStatusSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerStatusSearchAdvanced',
      'CustomerStatusSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerStatusSearchRow',
      'JobStatusSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\JobStatusSearch',
      'JobStatusSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\JobStatusSearchAdvanced',
      'JobStatusSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\JobStatusSearchRow',
      'JobTypeSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\JobTypeSearch',
      'JobTypeSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\JobTypeSearchAdvanced',
      'JobTypeSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\JobTypeSearchRow',
      'OriginatingLeadSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\OriginatingLeadSearch',
      'OriginatingLeadSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\OriginatingLeadSearchRow',
      'CustomerCurrency' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerCurrency',
      'CustomerCurrencyList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerCurrencyList',
      'VendorCurrency' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCurrency',
      'VendorCurrencyList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCurrencyList',
      'JobPlStatement' => 'SpauldingRidge\\SuiteTalk\\Service\\JobPlStatement',
      'JobPlStatementList' => 'SpauldingRidge\\SuiteTalk\\Service\\JobPlStatementList',
      'BillingAccount' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingAccount',
      'BillingAccountSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingAccountSearch',
      'BillingAccountSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingAccountSearchAdvanced',
      'BillingAccountSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingAccountSearchRow',
      'JobPercentCompleteOverride' => 'SpauldingRidge\\SuiteTalk\\Service\\JobPercentCompleteOverride',
      'JobPercentCompleteOverrideList' => 'SpauldingRidge\\SuiteTalk\\Service\\JobPercentCompleteOverrideList',
      'CustomerTaxRegistration' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerTaxRegistration',
      'CustomerTaxRegistrationList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerTaxRegistrationList',
      'PartnerTaxRegistration' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerTaxRegistration',
      'PartnerTaxRegistrationList' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerTaxRegistrationList',
      'VendorTaxRegistration' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorTaxRegistration',
      'VendorTaxRegistrationList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorTaxRegistrationList',
      'CustomerSubsidiaryRelationship' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerSubsidiaryRelationship',
      'CustomerSubsidiaryRelationshipSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerSubsidiaryRelationshipSearch',
      'CustomerSubsidiaryRelationshipSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerSubsidiaryRelationshipSearchAdvanced',
      'CustomerSubsidiaryRelationshipSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerSubsidiaryRelationshipSearchRow',
      'VendorSubsidiaryRelationship' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorSubsidiaryRelationship',
      'VendorSubsidiaryRelationshipSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorSubsidiaryRelationshipSearch',
      'VendorSubsidiaryRelationshipSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorSubsidiaryRelationshipSearchAdvanced',
      'VendorSubsidiaryRelationshipSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorSubsidiaryRelationshipSearchRow',
      'SupportCase' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCase',
      'EmailEmployeesList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmailEmployeesList',
      'SupportCaseEscalateTo' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseEscalateTo',
      'SupportCaseEscalateToList' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseEscalateToList',
      'SupportCaseSolutions' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseSolutions',
      'SupportCaseSolutionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseSolutionsList',
      'SupportCaseTimeItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseTimeItemList',
      'SupportCaseSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseSearch',
      'SupportCaseSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseSearchAdvanced',
      'SupportCaseSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseSearchRow',
      'SupportCaseStatus' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseStatus',
      'SupportCaseType' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseType',
      'SupportCaseOrigin' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseOrigin',
      'SupportCaseIssue' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCaseIssue',
      'SupportCasePriority' => 'SpauldingRidge\\SuiteTalk\\Service\\SupportCasePriority',
      'Solution' => 'SpauldingRidge\\SuiteTalk\\Service\\Solution',
      'SolutionTopics' => 'SpauldingRidge\\SuiteTalk\\Service\\SolutionTopics',
      'SolutionTopicsList' => 'SpauldingRidge\\SuiteTalk\\Service\\SolutionTopicsList',
      'Solutions' => 'SpauldingRidge\\SuiteTalk\\Service\\Solutions',
      'SolutionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\SolutionsList',
      'SolutionSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\SolutionSearch',
      'SolutionSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\SolutionSearchAdvanced',
      'SolutionSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\SolutionSearchRow',
      'Topic' => 'SpauldingRidge\\SuiteTalk\\Service\\Topic',
      'TopicSolution' => 'SpauldingRidge\\SuiteTalk\\Service\\TopicSolution',
      'TopicSolutionList' => 'SpauldingRidge\\SuiteTalk\\Service\\TopicSolutionList',
      'TopicSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\TopicSearch',
      'TopicSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\TopicSearchAdvanced',
      'TopicSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\TopicSearchRow',
      'Issue' => 'SpauldingRidge\\SuiteTalk\\Service\\Issue',
      'IssueVersion' => 'SpauldingRidge\\SuiteTalk\\Service\\IssueVersion',
      'IssueVersionList' => 'SpauldingRidge\\SuiteTalk\\Service\\IssueVersionList',
      'IssueSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\IssueSearch',
      'IssueSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\IssueSearchAdvanced',
      'IssueSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\IssueSearchRow',
      'IssueRelatedIssues' => 'SpauldingRidge\\SuiteTalk\\Service\\IssueRelatedIssues',
      'IssueRelatedIssuesList' => 'SpauldingRidge\\SuiteTalk\\Service\\IssueRelatedIssuesList',
      'ClassTranslation' => 'SpauldingRidge\\SuiteTalk\\Service\\ClassTranslation',
      'ClassTranslationList' => 'SpauldingRidge\\SuiteTalk\\Service\\ClassTranslationList',
      'ContactCategory' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactCategory',
      'CustomerCategory' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerCategory',
      'SalesRole' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesRole',
      'PriceLevel' => 'SpauldingRidge\\SuiteTalk\\Service\\PriceLevel',
      'WinLossReason' => 'SpauldingRidge\\SuiteTalk\\Service\\WinLossReason',
      'Term' => 'SpauldingRidge\\SuiteTalk\\Service\\Term',
      'NoteType' => 'SpauldingRidge\\SuiteTalk\\Service\\NoteType',
      'PaymentMethod' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentMethod',
      'LeadSource' => 'SpauldingRidge\\SuiteTalk\\Service\\LeadSource',
      'Price' => 'SpauldingRidge\\SuiteTalk\\Service\\Price',
      'PriceList' => 'SpauldingRidge\\SuiteTalk\\Service\\PriceList',
      'Pricing' => 'SpauldingRidge\\SuiteTalk\\Service\\Pricing',
      'PricingMatrix' => 'SpauldingRidge\\SuiteTalk\\Service\\PricingMatrix',
      'Rate' => 'SpauldingRidge\\SuiteTalk\\Service\\Rate',
      'RateList' => 'SpauldingRidge\\SuiteTalk\\Service\\RateList',
      'BillingRates' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingRates',
      'BillingRatesMatrix' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingRatesMatrix',
      'Translation' => 'SpauldingRidge\\SuiteTalk\\Service\\Translation',
      'TranslationList' => 'SpauldingRidge\\SuiteTalk\\Service\\TranslationList',
      'ItemOptionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemOptionsList',
      'ItemVendor' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemVendor',
      'ItemVendorList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemVendorList',
      'SiteCategory' => 'SpauldingRidge\\SuiteTalk\\Service\\SiteCategory',
      'SiteCategoryList' => 'SpauldingRidge\\SuiteTalk\\Service\\SiteCategoryList',
      'ProductFeedList' => 'SpauldingRidge\\SuiteTalk\\Service\\ProductFeedList',
      'ItemMember' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemMember',
      'ItemMemberList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemMemberList',
      'InventoryItem' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryItem',
      'MatrixOptionList' => 'SpauldingRidge\\SuiteTalk\\Service\\MatrixOptionList',
      'InventoryItemBinNumber' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryItemBinNumber',
      'InventoryItemBinNumberList' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryItemBinNumberList',
      'InventoryItemLocations' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryItemLocations',
      'InventoryItemLocationsList' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryItemLocationsList',
      'PresentationItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\PresentationItemList',
      'DescriptionItem' => 'SpauldingRidge\\SuiteTalk\\Service\\DescriptionItem',
      'DiscountItem' => 'SpauldingRidge\\SuiteTalk\\Service\\DiscountItem',
      'DownloadItem' => 'SpauldingRidge\\SuiteTalk\\Service\\DownloadItem',
      'MarkupItem' => 'SpauldingRidge\\SuiteTalk\\Service\\MarkupItem',
      'PaymentItem' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentItem',
      'SubtotalItem' => 'SpauldingRidge\\SuiteTalk\\Service\\SubtotalItem',
      'NonInventoryPurchaseItem' => 'SpauldingRidge\\SuiteTalk\\Service\\NonInventoryPurchaseItem',
      'NonInventorySaleItem' => 'SpauldingRidge\\SuiteTalk\\Service\\NonInventorySaleItem',
      'NonInventoryResaleItem' => 'SpauldingRidge\\SuiteTalk\\Service\\NonInventoryResaleItem',
      'OtherChargeResaleItem' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherChargeResaleItem',
      'OtherChargePurchaseItem' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherChargePurchaseItem',
      'ServiceResaleItem' => 'SpauldingRidge\\SuiteTalk\\Service\\ServiceResaleItem',
      'ServicePurchaseItem' => 'SpauldingRidge\\SuiteTalk\\Service\\ServicePurchaseItem',
      'ServiceSaleItem' => 'SpauldingRidge\\SuiteTalk\\Service\\ServiceSaleItem',
      'OtherChargeSaleItem' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherChargeSaleItem',
      'Currency' => 'SpauldingRidge\\SuiteTalk\\Service\\Currency',
      'ExpenseCategory' => 'SpauldingRidge\\SuiteTalk\\Service\\ExpenseCategory',
      'Account' => 'SpauldingRidge\\SuiteTalk\\Service\\Account',
      'AccountSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountSearch',
      'AccountSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountSearchAdvanced',
      'AccountSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountSearchRow',
      'Department' => 'SpauldingRidge\\SuiteTalk\\Service\\Department',
      'DepartmentSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\DepartmentSearch',
      'DepartmentSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\DepartmentSearchAdvanced',
      'DepartmentSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\DepartmentSearchRow',
      'Classification' => 'SpauldingRidge\\SuiteTalk\\Service\\Classification',
      'ClassificationSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ClassificationSearch',
      'ClassificationSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ClassificationSearchAdvanced',
      'ClassificationSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ClassificationSearchRow',
      'Location' => 'SpauldingRidge\\SuiteTalk\\Service\\Location',
      'LocationSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\LocationSearch',
      'LocationSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\LocationSearchAdvanced',
      'LocationSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\LocationSearchRow',
      'UnitsType' => 'SpauldingRidge\\SuiteTalk\\Service\\UnitsType',
      'UnitsTypeUom' => 'SpauldingRidge\\SuiteTalk\\Service\\UnitsTypeUom',
      'UnitsTypeUomList' => 'SpauldingRidge\\SuiteTalk\\Service\\UnitsTypeUomList',
      'ItemSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemSearch',
      'ItemSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemSearchAdvanced',
      'ItemSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemSearchRow',
      'ContactRole' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactRole',
      'Bin' => 'SpauldingRidge\\SuiteTalk\\Service\\Bin',
      'BinSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\BinSearch',
      'BinSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\BinSearchAdvanced',
      'BinSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\BinSearchRow',
      'SalesTaxItem' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesTaxItem',
      'TaxGroup' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxGroup',
      'TaxGroupTaxItem' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxGroupTaxItem',
      'TaxGroupTaxItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxGroupTaxItemList',
      'TaxType' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxType',
      'TaxTypeNexusesTax' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxTypeNexusesTax',
      'TaxTypeNexusesTaxList' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxTypeNexusesTaxList',
      'SerializedInventoryItem' => 'SpauldingRidge\\SuiteTalk\\Service\\SerializedInventoryItem',
      'SerializedInventoryItemLocations' => 'SpauldingRidge\\SuiteTalk\\Service\\SerializedInventoryItemLocations',
      'SerializedInventoryItemLocationsList' => 'SpauldingRidge\\SuiteTalk\\Service\\SerializedInventoryItemLocationsList',
      'SerializedInventoryItemNumbers' => 'SpauldingRidge\\SuiteTalk\\Service\\SerializedInventoryItemNumbers',
      'SerializedInventoryItemNumbersList' => 'SpauldingRidge\\SuiteTalk\\Service\\SerializedInventoryItemNumbersList',
      'LotNumberedInventoryItem' => 'SpauldingRidge\\SuiteTalk\\Service\\LotNumberedInventoryItem',
      'LotNumberedInventoryItemLocations' => 'SpauldingRidge\\SuiteTalk\\Service\\LotNumberedInventoryItemLocations',
      'LotNumberedInventoryItemLocationsList' => 'SpauldingRidge\\SuiteTalk\\Service\\LotNumberedInventoryItemLocationsList',
      'LotNumberedInventoryItemNumbers' => 'SpauldingRidge\\SuiteTalk\\Service\\LotNumberedInventoryItemNumbers',
      'LotNumberedInventoryItemNumbersList' => 'SpauldingRidge\\SuiteTalk\\Service\\LotNumberedInventoryItemNumbersList',
      'GiftCertificateItem' => 'SpauldingRidge\\SuiteTalk\\Service\\GiftCertificateItem',
      'GiftCertificateItemAuthCodes' => 'SpauldingRidge\\SuiteTalk\\Service\\GiftCertificateItemAuthCodes',
      'GiftCertificateItemAuthCodesList' => 'SpauldingRidge\\SuiteTalk\\Service\\GiftCertificateItemAuthCodesList',
      'Subsidiary' => 'SpauldingRidge\\SuiteTalk\\Service\\Subsidiary',
      'SubsidiaryNexus' => 'SpauldingRidge\\SuiteTalk\\Service\\SubsidiaryNexus',
      'SubsidiaryNexusList' => 'SpauldingRidge\\SuiteTalk\\Service\\SubsidiaryNexusList',
      'SubsidiarySearch' => 'SpauldingRidge\\SuiteTalk\\Service\\SubsidiarySearch',
      'SubsidiarySearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\SubsidiarySearchAdvanced',
      'SubsidiarySearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\SubsidiarySearchRow',
      'GiftCertificate' => 'SpauldingRidge\\SuiteTalk\\Service\\GiftCertificate',
      'GiftCertificateSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\GiftCertificateSearch',
      'GiftCertificateSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\GiftCertificateSearchAdvanced',
      'GiftCertificateSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\GiftCertificateSearchRow',
      'PartnerCategory' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerCategory',
      'VendorCategory' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCategory',
      'KitItem' => 'SpauldingRidge\\SuiteTalk\\Service\\KitItem',
      'AssemblyItem' => 'SpauldingRidge\\SuiteTalk\\Service\\AssemblyItem',
      'SerializedAssemblyItem' => 'SpauldingRidge\\SuiteTalk\\Service\\SerializedAssemblyItem',
      'LotNumberedAssemblyItem' => 'SpauldingRidge\\SuiteTalk\\Service\\LotNumberedAssemblyItem',
      'ServiceItemTaskTemplates' => 'SpauldingRidge\\SuiteTalk\\Service\\ServiceItemTaskTemplates',
      'ServiceItemTaskTemplatesList' => 'SpauldingRidge\\SuiteTalk\\Service\\ServiceItemTaskTemplatesList',
      'State' => 'SpauldingRidge\\SuiteTalk\\Service\\State',
      'AccountingPeriod' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingPeriod',
      'BudgetCategory' => 'SpauldingRidge\\SuiteTalk\\Service\\BudgetCategory',
      'AccountingPeriodSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingPeriodSearch',
      'AccountingPeriodSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingPeriodSearchAdvanced',
      'AccountingPeriodSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingPeriodSearchRow',
      'ContactCategorySearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactCategorySearch',
      'ContactCategorySearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactCategorySearchAdvanced',
      'ContactCategorySearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactCategorySearchRow',
      'ContactRoleSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactRoleSearch',
      'ContactRoleSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactRoleSearchAdvanced',
      'ContactRoleSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ContactRoleSearchRow',
      'CustomerCategorySearch' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerCategorySearch',
      'CustomerCategorySearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerCategorySearchAdvanced',
      'CustomerCategorySearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerCategorySearchRow',
      'ExpenseCategorySearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ExpenseCategorySearch',
      'ExpenseCategorySearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ExpenseCategorySearchAdvanced',
      'ExpenseCategorySearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ExpenseCategorySearchRow',
      'NoteTypeSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\NoteTypeSearch',
      'NoteTypeSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\NoteTypeSearchAdvanced',
      'NoteTypeSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\NoteTypeSearchRow',
      'PartnerCategorySearch' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerCategorySearch',
      'PartnerCategorySearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerCategorySearchAdvanced',
      'PartnerCategorySearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnerCategorySearchRow',
      'PaymentMethodSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentMethodSearch',
      'PaymentMethodSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentMethodSearchAdvanced',
      'PaymentMethodSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentMethodSearchRow',
      'PriceLevelSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\PriceLevelSearch',
      'PriceLevelSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\PriceLevelSearchAdvanced',
      'PriceLevelSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\PriceLevelSearchRow',
      'SalesRoleSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesRoleSearch',
      'SalesRoleSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesRoleSearchAdvanced',
      'SalesRoleSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesRoleSearchRow',
      'TermSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\TermSearch',
      'TermSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\TermSearchAdvanced',
      'TermSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\TermSearchRow',
      'VendorCategorySearch' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCategorySearch',
      'VendorCategorySearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCategorySearchAdvanced',
      'VendorCategorySearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCategorySearchRow',
      'WinLossReasonSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\WinLossReasonSearch',
      'WinLossReasonSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\WinLossReasonSearchAdvanced',
      'WinLossReasonSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\WinLossReasonSearchRow',
      'UnitsTypeSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\UnitsTypeSearch',
      'UnitsTypeSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\UnitsTypeSearchAdvanced',
      'UnitsTypeSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\UnitsTypeSearchRow',
      'PricingGroup' => 'SpauldingRidge\\SuiteTalk\\Service\\PricingGroup',
      'PricingGroupSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\PricingGroupSearch',
      'PricingGroupSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\PricingGroupSearchAdvanced',
      'PricingGroupSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\PricingGroupSearchRow',
      'InventoryNumber' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryNumber',
      'InventoryNumberLocations' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryNumberLocations',
      'InventoryNumberLocationsList' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryNumberLocationsList',
      'InventoryNumberSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryNumberSearch',
      'InventoryNumberSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryNumberSearchAdvanced',
      'InventoryNumberSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryNumberSearchRow',
      'RevRecSchedule' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecSchedule',
      'RevRecScheduleRecurrence' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecScheduleRecurrence',
      'RevRecScheduleRecurrenceList' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecScheduleRecurrenceList',
      'RevRecTemplate' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecTemplate',
      'RevRecTemplateRecurrence' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecTemplateRecurrence',
      'RevRecTemplateRecurrenceList' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecTemplateRecurrenceList',
      'RevRecScheduleSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecScheduleSearch',
      'RevRecScheduleSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecScheduleSearchAdvanced',
      'RevRecScheduleSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecScheduleSearchRow',
      'RevRecTemplateSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecTemplateSearch',
      'RevRecTemplateSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecTemplateSearchAdvanced',
      'RevRecTemplateSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\RevRecTemplateSearchRow',
      'CostCategory' => 'SpauldingRidge\\SuiteTalk\\Service\\CostCategory',
      'Nexus' => 'SpauldingRidge\\SuiteTalk\\Service\\Nexus',
      'NexusSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\NexusSearch',
      'NexusSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\NexusSearchAdvanced',
      'NexusSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\NexusSearchRow',
      'CustomerMessage' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerMessage',
      'OtherNameCategory' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherNameCategory',
      'OtherNameCategorySearch' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherNameCategorySearch',
      'OtherNameCategorySearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherNameCategorySearchAdvanced',
      'OtherNameCategorySearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherNameCategorySearchRow',
      'CustomerMessageSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerMessageSearch',
      'CustomerMessageSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerMessageSearchAdvanced',
      'CustomerMessageSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerMessageSearchRow',
      'ItemGroup' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemGroup',
      'CurrencyRateSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\CurrencyRateSearch',
      'CurrencyRateSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\CurrencyRateSearchAdvanced',
      'CurrencyRateSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\CurrencyRateSearchRow',
      'ItemRevision' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemRevision',
      'ItemRevisionSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemRevisionSearch',
      'ItemRevisionSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemRevisionSearchAdvanced',
      'ItemRevisionSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemRevisionSearchRow',
      'AccountingPeriodFiscalCalendars' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingPeriodFiscalCalendars',
      'AccountingPeriodFiscalCalendarsList' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingPeriodFiscalCalendarsList',
      'TaxAcct' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxAcct',
      'ExpenseCategoryRates' => 'SpauldingRidge\\SuiteTalk\\Service\\ExpenseCategoryRates',
      'ExpenseCategoryRatesList' => 'SpauldingRidge\\SuiteTalk\\Service\\ExpenseCategoryRatesList',
      'BillingSchedule' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingSchedule',
      'BillingScheduleMilestone' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingScheduleMilestone',
      'BillingScheduleMilestoneList' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingScheduleMilestoneList',
      'BillingScheduleRecurrence' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingScheduleRecurrence',
      'BillingScheduleRecurrenceList' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingScheduleRecurrenceList',
      'BillingScheduleSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingScheduleSearch',
      'BillingScheduleSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingScheduleSearchAdvanced',
      'BillingScheduleSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\BillingScheduleSearchRow',
      'GlobalAccountMapping' => 'SpauldingRidge\\SuiteTalk\\Service\\GlobalAccountMapping',
      'GlobalAccountMappingSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\GlobalAccountMappingSearch',
      'GlobalAccountMappingSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\GlobalAccountMappingSearchAdvanced',
      'GlobalAccountMappingSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\GlobalAccountMappingSearchRow',
      'ItemAccountMapping' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemAccountMapping',
      'ItemAccountMappingSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemAccountMappingSearch',
      'ItemAccountMappingSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemAccountMappingSearchAdvanced',
      'ItemAccountMappingSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemAccountMappingSearchRow',
      'ItemAccountingBookDetail' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemAccountingBookDetail',
      'ItemAccountingBookDetailList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemAccountingBookDetailList',
      'SubsidiaryAccountingBookDetail' => 'SpauldingRidge\\SuiteTalk\\Service\\SubsidiaryAccountingBookDetail',
      'SubsidiaryAccountingBookDetailList' => 'SpauldingRidge\\SuiteTalk\\Service\\SubsidiaryAccountingBookDetailList',
      'PaymentMethodVisuals' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentMethodVisuals',
      'PaymentMethodVisualsList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentMethodVisualsList',
      'FairValuePrice' => 'SpauldingRidge\\SuiteTalk\\Service\\FairValuePrice',
      'FairValuePriceSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\FairValuePriceSearch',
      'FairValuePriceSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\FairValuePriceSearchAdvanced',
      'FairValuePriceSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\FairValuePriceSearchRow',
      'LocationRegions' => 'SpauldingRidge\\SuiteTalk\\Service\\LocationRegions',
      'LocationRegionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\LocationRegionsList',
      'TaxTypeNexusAccounts' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxTypeNexusAccounts',
      'TaxTypeNexusAccountsList' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxTypeNexusAccountsList',
      'SubsidiaryTaxRegistration' => 'SpauldingRidge\\SuiteTalk\\Service\\SubsidiaryTaxRegistration',
      'SubsidiaryTaxRegistrationList' => 'SpauldingRidge\\SuiteTalk\\Service\\SubsidiaryTaxRegistrationList',
      'CostCategorySearch' => 'SpauldingRidge\\SuiteTalk\\Service\\CostCategorySearch',
      'CostCategorySearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\CostCategorySearchAdvanced',
      'CostCategorySearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\CostCategorySearchRow',
      'AccountLocalizations' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountLocalizations',
      'AccountLocalizationsList' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountLocalizationsList',
      'ConsolidatedExchangeRate' => 'SpauldingRidge\\SuiteTalk\\Service\\ConsolidatedExchangeRate',
      'ConsolidatedExchangeRateSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ConsolidatedExchangeRateSearch',
      'ConsolidatedExchangeRateSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ConsolidatedExchangeRateSearchAdvanced',
      'ConsolidatedExchangeRateSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ConsolidatedExchangeRateSearchRow',
      'TaxGroupSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxGroupSearch',
      'TaxGroupSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxGroupSearchAdvanced',
      'TaxGroupSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxGroupSearchRow',
      'SalesTaxItemSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesTaxItemSearch',
      'SalesTaxItemSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesTaxItemSearchAdvanced',
      'SalesTaxItemSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesTaxItemSearchRow',
      'TaxTypeSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxTypeSearch',
      'TaxTypeSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxTypeSearchAdvanced',
      'TaxTypeSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\TaxTypeSearchRow',
      'LocationBusinessHours' => 'SpauldingRidge\\SuiteTalk\\Service\\LocationBusinessHours',
      'LocationBusinessHoursList' => 'SpauldingRidge\\SuiteTalk\\Service\\LocationBusinessHoursList',
      'Bom' => 'SpauldingRidge\\SuiteTalk\\Service\\Bom',
      'BomSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\BomSearch',
      'BomSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\BomSearchAdvanced',
      'BomSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\BomSearchRow',
      'BomRevision' => 'SpauldingRidge\\SuiteTalk\\Service\\BomRevision',
      'BomRevisionSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\BomRevisionSearch',
      'BomRevisionSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\BomRevisionSearchAdvanced',
      'BomRevisionSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\BomRevisionSearchRow',
      'BomRevisionComponent' => 'SpauldingRidge\\SuiteTalk\\Service\\BomRevisionComponent',
      'BomRevisionComponentList' => 'SpauldingRidge\\SuiteTalk\\Service\\BomRevisionComponentList',
      'AssemblyItemBillOfMaterials' => 'SpauldingRidge\\SuiteTalk\\Service\\AssemblyItemBillOfMaterials',
      'AssemblyItemBillOfMaterialsList' => 'SpauldingRidge\\SuiteTalk\\Service\\AssemblyItemBillOfMaterialsList',
      'SerializedAssemblyItemBillOfMaterials' => 'SpauldingRidge\\SuiteTalk\\Service\\SerializedAssemblyItemBillOfMaterials',
      'SerializedAssemblyItemBillOfMaterialsList' => 'SpauldingRidge\\SuiteTalk\\Service\\SerializedAssemblyItemBillOfMaterialsList',
      'LotNumberedAssemblyItemBillOfMaterials' => 'SpauldingRidge\\SuiteTalk\\Service\\LotNumberedAssemblyItemBillOfMaterials',
      'LotNumberedAssemblyItemBillOfMaterialsList' => 'SpauldingRidge\\SuiteTalk\\Service\\LotNumberedAssemblyItemBillOfMaterialsList',
      'PaymentCard' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentCard',
      'GeneralTokenSupportedOperationsListList' => 'SpauldingRidge\\SuiteTalk\\Service\\GeneralTokenSupportedOperationsListList',
      'GeneralToken' => 'SpauldingRidge\\SuiteTalk\\Service\\GeneralToken',
      'PaymentCardToken' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentCardToken',
      'PaymentInstrumentSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentInstrumentSearch',
      'PaymentInstrumentSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentInstrumentSearchAdvanced',
      'PaymentInstrumentSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentInstrumentSearchRow',
      'PaymentOptionSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentOptionSearch',
      'PaymentOptionSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentOptionSearchAdvanced',
      'PaymentOptionSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\PaymentOptionSearchRow',
      'InventoryItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryItemHierarchyVersions',
      'InventoryItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryItemHierarchyVersionsList',
      'LotNumberedInventoryItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\LotNumberedInventoryItemHierarchyVersions',
      'LotNumberedInventoryItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\LotNumberedInventoryItemHierarchyVersionsList',
      'SerializedInventoryItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\SerializedInventoryItemHierarchyVersions',
      'SerializedInventoryItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\SerializedInventoryItemHierarchyVersionsList',
      'MerchandiseHierarchyNode' => 'SpauldingRidge\\SuiteTalk\\Service\\MerchandiseHierarchyNode',
      'MerchandiseHierarchyNodeHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\MerchandiseHierarchyNodeHierarchyVersions',
      'MerchandiseHierarchyNodeHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\MerchandiseHierarchyNodeHierarchyVersionsList',
      'MerchandiseHierarchyNodeSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\MerchandiseHierarchyNodeSearch',
      'MerchandiseHierarchyNodeSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\MerchandiseHierarchyNodeSearchAdvanced',
      'MerchandiseHierarchyNodeSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\MerchandiseHierarchyNodeSearchRow',
      'TermPercentages' => 'SpauldingRidge\\SuiteTalk\\Service\\TermPercentages',
      'TermPercentagesList' => 'SpauldingRidge\\SuiteTalk\\Service\\TermPercentagesList',
      'AssemblyItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\AssemblyItemHierarchyVersions',
      'AssemblyItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\AssemblyItemHierarchyVersionsList',
      'SerializedAssemblyItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\SerializedAssemblyItemHierarchyVersions',
      'SerializedAssemblyItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\SerializedAssemblyItemHierarchyVersionsList',
      'LotNumberedAssemblyItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\LotNumberedAssemblyItemHierarchyVersions',
      'LotNumberedAssemblyItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\LotNumberedAssemblyItemHierarchyVersionsList',
      'NonInventoryPurchaseItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\NonInventoryPurchaseItemHierarchyVersions',
      'NonInventoryPurchaseItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\NonInventoryPurchaseItemHierarchyVersionsList',
      'NonInventorySaleItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\NonInventorySaleItemHierarchyVersions',
      'NonInventorySaleItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\NonInventorySaleItemHierarchyVersionsList',
      'NonInventoryResaleItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\NonInventoryResaleItemHierarchyVersions',
      'NonInventoryResaleItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\NonInventoryResaleItemHierarchyVersionsList',
      'OtherChargeResaleItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherChargeResaleItemHierarchyVersions',
      'OtherChargeResaleItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherChargeResaleItemHierarchyVersionsList',
      'OtherChargePurchaseItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherChargePurchaseItemHierarchyVersions',
      'OtherChargePurchaseItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherChargePurchaseItemHierarchyVersionsList',
      'ServiceResaleItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\ServiceResaleItemHierarchyVersions',
      'ServiceResaleItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\ServiceResaleItemHierarchyVersionsList',
      'ServicePurchaseItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\ServicePurchaseItemHierarchyVersions',
      'ServicePurchaseItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\ServicePurchaseItemHierarchyVersionsList',
      'ServiceSaleItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\ServiceSaleItemHierarchyVersions',
      'ServiceSaleItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\ServiceSaleItemHierarchyVersionsList',
      'OtherChargeSaleItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherChargeSaleItemHierarchyVersions',
      'OtherChargeSaleItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherChargeSaleItemHierarchyVersionsList',
      'KitItemHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\KitItemHierarchyVersions',
      'KitItemHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\KitItemHierarchyVersionsList',
      'ItemGroupHierarchyVersions' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemGroupHierarchyVersions',
      'ItemGroupHierarchyVersionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemGroupHierarchyVersionsList',
      'Opportunity' => 'SpauldingRidge\\SuiteTalk\\Service\\Opportunity',
      'OpportunitySalesTeam' => 'SpauldingRidge\\SuiteTalk\\Service\\OpportunitySalesTeam',
      'OpportunitySalesTeamList' => 'SpauldingRidge\\SuiteTalk\\Service\\OpportunitySalesTeamList',
      'OpportunityItem' => 'SpauldingRidge\\SuiteTalk\\Service\\OpportunityItem',
      'OpportunityItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\OpportunityItemList',
      'OpportunityCompetitors' => 'SpauldingRidge\\SuiteTalk\\Service\\OpportunityCompetitors',
      'OpportunityCompetitorsList' => 'SpauldingRidge\\SuiteTalk\\Service\\OpportunityCompetitorsList',
      'OpportunitySearch' => 'SpauldingRidge\\SuiteTalk\\Service\\OpportunitySearch',
      'OpportunitySearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\OpportunitySearchAdvanced',
      'OpportunitySearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\OpportunitySearchRow',
      'OpportunityPartnersList' => 'SpauldingRidge\\SuiteTalk\\Service\\OpportunityPartnersList',
      'SalesOrder' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesOrder',
      'SalesOrderSalesTeam' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesOrderSalesTeam',
      'SalesOrderSalesTeamList' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesOrderSalesTeamList',
      'SalesOrderItem' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesOrderItem',
      'SalesOrderItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesOrderItemList',
      'SalesOrderPartnersList' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesOrderPartnersList',
      'SalesOrderShipGroupList' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesOrderShipGroupList',
      'TransactionSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\TransactionSearch',
      'TransactionSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\TransactionSearchAdvanced',
      'TransactionSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\TransactionSearchRow',
      'ItemFulfillment' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemFulfillment',
      'ItemFulfillmentItem' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemFulfillmentItem',
      'ItemFulfillmentItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemFulfillmentItemList',
      'ItemFulfillmentPackage' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemFulfillmentPackage',
      'ItemFulfillmentPackageList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemFulfillmentPackageList',
      'ItemFulfillmentPackageUps' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemFulfillmentPackageUps',
      'ItemFulfillmentPackageUpsList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemFulfillmentPackageUpsList',
      'ItemFulfillmentPackageUsps' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemFulfillmentPackageUsps',
      'ItemFulfillmentPackageUspsList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemFulfillmentPackageUspsList',
      'ItemFulfillmentPackageFedEx' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemFulfillmentPackageFedEx',
      'ItemFulfillmentPackageFedExList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemFulfillmentPackageFedExList',
      'Invoice' => 'SpauldingRidge\\SuiteTalk\\Service\\Invoice',
      'InvoiceSalesTeam' => 'SpauldingRidge\\SuiteTalk\\Service\\InvoiceSalesTeam',
      'InvoiceSalesTeamList' => 'SpauldingRidge\\SuiteTalk\\Service\\InvoiceSalesTeamList',
      'InvoiceItem' => 'SpauldingRidge\\SuiteTalk\\Service\\InvoiceItem',
      'InvoiceItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\InvoiceItemList',
      'InvoiceItemCost' => 'SpauldingRidge\\SuiteTalk\\Service\\InvoiceItemCost',
      'InvoiceItemCostList' => 'SpauldingRidge\\SuiteTalk\\Service\\InvoiceItemCostList',
      'InvoiceExpCost' => 'SpauldingRidge\\SuiteTalk\\Service\\InvoiceExpCost',
      'InvoiceExpCostList' => 'SpauldingRidge\\SuiteTalk\\Service\\InvoiceExpCostList',
      'InvoiceTime' => 'SpauldingRidge\\SuiteTalk\\Service\\InvoiceTime',
      'InvoiceTimeList' => 'SpauldingRidge\\SuiteTalk\\Service\\InvoiceTimeList',
      'InvoicePartnersList' => 'SpauldingRidge\\SuiteTalk\\Service\\InvoicePartnersList',
      'InvoiceShipGroupList' => 'SpauldingRidge\\SuiteTalk\\Service\\InvoiceShipGroupList',
      'CashSale' => 'SpauldingRidge\\SuiteTalk\\Service\\CashSale',
      'CashSaleSalesTeam' => 'SpauldingRidge\\SuiteTalk\\Service\\CashSaleSalesTeam',
      'CashSaleSalesTeamList' => 'SpauldingRidge\\SuiteTalk\\Service\\CashSaleSalesTeamList',
      'CashSaleItem' => 'SpauldingRidge\\SuiteTalk\\Service\\CashSaleItem',
      'CashSaleItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\CashSaleItemList',
      'CashSaleItemCost' => 'SpauldingRidge\\SuiteTalk\\Service\\CashSaleItemCost',
      'CashSaleItemCostList' => 'SpauldingRidge\\SuiteTalk\\Service\\CashSaleItemCostList',
      'CashSaleExpCost' => 'SpauldingRidge\\SuiteTalk\\Service\\CashSaleExpCost',
      'CashSaleExpCostList' => 'SpauldingRidge\\SuiteTalk\\Service\\CashSaleExpCostList',
      'CashSaleTime' => 'SpauldingRidge\\SuiteTalk\\Service\\CashSaleTime',
      'CashSaleTimeList' => 'SpauldingRidge\\SuiteTalk\\Service\\CashSaleTimeList',
      'CashSalePartnersList' => 'SpauldingRidge\\SuiteTalk\\Service\\CashSalePartnersList',
      'CashSaleShipGroupList' => 'SpauldingRidge\\SuiteTalk\\Service\\CashSaleShipGroupList',
      'Estimate' => 'SpauldingRidge\\SuiteTalk\\Service\\Estimate',
      'EstimateItem' => 'SpauldingRidge\\SuiteTalk\\Service\\EstimateItem',
      'EstimateItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\EstimateItemList',
      'EstimateSalesTeam' => 'SpauldingRidge\\SuiteTalk\\Service\\EstimateSalesTeam',
      'EstimateSalesTeamList' => 'SpauldingRidge\\SuiteTalk\\Service\\EstimateSalesTeamList',
      'EstimatePartnersList' => 'SpauldingRidge\\SuiteTalk\\Service\\EstimatePartnersList',
      'EstimateShipGroupList' => 'SpauldingRidge\\SuiteTalk\\Service\\EstimateShipGroupList',
      'TransactionShipGroup' => 'SpauldingRidge\\SuiteTalk\\Service\\TransactionShipGroup',
      'AccountingTransactionSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingTransactionSearch',
      'AccountingTransactionSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingTransactionSearchAdvanced',
      'AccountingTransactionSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\AccountingTransactionSearchRow',
      'Usage' => 'SpauldingRidge\\SuiteTalk\\Service\\Usage',
      'UsageSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\UsageSearch',
      'UsageSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\UsageSearchAdvanced',
      'UsageSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\UsageSearchRow',
      'VendorBill' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorBill',
      'VendorBillExpense' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorBillExpense',
      'VendorBillExpenseList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorBillExpenseList',
      'VendorBillItem' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorBillItem',
      'VendorBillItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorBillItemList',
      'PurchaseOrder' => 'SpauldingRidge\\SuiteTalk\\Service\\PurchaseOrder',
      'PurchaseOrderExpense' => 'SpauldingRidge\\SuiteTalk\\Service\\PurchaseOrderExpense',
      'PurchaseOrderExpenseList' => 'SpauldingRidge\\SuiteTalk\\Service\\PurchaseOrderExpenseList',
      'PurchaseOrderItem' => 'SpauldingRidge\\SuiteTalk\\Service\\PurchaseOrderItem',
      'PurchaseOrderItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\PurchaseOrderItemList',
      'ItemReceipt' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemReceipt',
      'ItemReceiptItem' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemReceiptItem',
      'ItemReceiptItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemReceiptItemList',
      'ItemReceiptExpense' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemReceiptExpense',
      'ItemReceiptExpenseList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemReceiptExpenseList',
      'VendorPayment' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorPayment',
      'VendorPaymentApply' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorPaymentApply',
      'VendorPaymentApplyList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorPaymentApplyList',
      'VendorPaymentCredit' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorPaymentCredit',
      'VendorPaymentCreditList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorPaymentCreditList',
      'VendorCredit' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCredit',
      'VendorCreditExpense' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCreditExpense',
      'VendorCreditExpenseList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCreditExpenseList',
      'VendorCreditItem' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCreditItem',
      'VendorCreditItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCreditItemList',
      'VendorCreditApply' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCreditApply',
      'VendorCreditApplyList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorCreditApplyList',
      'VendorReturnAuthorization' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorReturnAuthorization',
      'VendorReturnAuthorizationExpense' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorReturnAuthorizationExpense',
      'VendorReturnAuthorizationExpenseList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorReturnAuthorizationExpenseList',
      'VendorReturnAuthorizationItem' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorReturnAuthorizationItem',
      'VendorReturnAuthorizationItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\VendorReturnAuthorizationItemList',
      'PurchaseRequisition' => 'SpauldingRidge\\SuiteTalk\\Service\\PurchaseRequisition',
      'PurchaseRequisitionExpense' => 'SpauldingRidge\\SuiteTalk\\Service\\PurchaseRequisitionExpense',
      'PurchaseRequisitionExpenseList' => 'SpauldingRidge\\SuiteTalk\\Service\\PurchaseRequisitionExpenseList',
      'PurchaseRequisitionItem' => 'SpauldingRidge\\SuiteTalk\\Service\\PurchaseRequisitionItem',
      'PurchaseRequisitionItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\PurchaseRequisitionItemList',
      'InboundShipment' => 'SpauldingRidge\\SuiteTalk\\Service\\InboundShipment',
      'InboundShipmentItems' => 'SpauldingRidge\\SuiteTalk\\Service\\InboundShipmentItems',
      'InboundShipmentItemsList' => 'SpauldingRidge\\SuiteTalk\\Service\\InboundShipmentItemsList',
      'InboundShipmentSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\InboundShipmentSearch',
      'InboundShipmentSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\InboundShipmentSearchAdvanced',
      'InboundShipmentSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\InboundShipmentSearchRow',
      'InboundShipmentLandedCost' => 'SpauldingRidge\\SuiteTalk\\Service\\InboundShipmentLandedCost',
      'InboundShipmentLandedCostList' => 'SpauldingRidge\\SuiteTalk\\Service\\InboundShipmentLandedCostList',
      'CashRefund' => 'SpauldingRidge\\SuiteTalk\\Service\\CashRefund',
      'CashRefundItem' => 'SpauldingRidge\\SuiteTalk\\Service\\CashRefundItem',
      'CashRefundItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\CashRefundItemList',
      'CashRefundSalesTeam' => 'SpauldingRidge\\SuiteTalk\\Service\\CashRefundSalesTeam',
      'CashRefundSalesTeamList' => 'SpauldingRidge\\SuiteTalk\\Service\\CashRefundSalesTeamList',
      'CashRefundPartnersList' => 'SpauldingRidge\\SuiteTalk\\Service\\CashRefundPartnersList',
      'CustomerPayment' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerPayment',
      'CustomerPaymentApply' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerPaymentApply',
      'CustomerPaymentApplyList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerPaymentApplyList',
      'CustomerPaymentCredit' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerPaymentCredit',
      'CustomerPaymentCreditList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerPaymentCreditList',
      'CustomerPaymentDeposit' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerPaymentDeposit',
      'CustomerPaymentDepositList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerPaymentDepositList',
      'ReturnAuthorization' => 'SpauldingRidge\\SuiteTalk\\Service\\ReturnAuthorization',
      'ReturnAuthorizationItem' => 'SpauldingRidge\\SuiteTalk\\Service\\ReturnAuthorizationItem',
      'ReturnAuthorizationItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\ReturnAuthorizationItemList',
      'ReturnAuthorizationSalesTeam' => 'SpauldingRidge\\SuiteTalk\\Service\\ReturnAuthorizationSalesTeam',
      'ReturnAuthorizationSalesTeamList' => 'SpauldingRidge\\SuiteTalk\\Service\\ReturnAuthorizationSalesTeamList',
      'ReturnAuthorizationPartnersList' => 'SpauldingRidge\\SuiteTalk\\Service\\ReturnAuthorizationPartnersList',
      'CreditMemo' => 'SpauldingRidge\\SuiteTalk\\Service\\CreditMemo',
      'CreditMemoSalesTeam' => 'SpauldingRidge\\SuiteTalk\\Service\\CreditMemoSalesTeam',
      'CreditMemoSalesTeamList' => 'SpauldingRidge\\SuiteTalk\\Service\\CreditMemoSalesTeamList',
      'CreditMemoItem' => 'SpauldingRidge\\SuiteTalk\\Service\\CreditMemoItem',
      'CreditMemoItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\CreditMemoItemList',
      'CreditMemoApply' => 'SpauldingRidge\\SuiteTalk\\Service\\CreditMemoApply',
      'CreditMemoApplyList' => 'SpauldingRidge\\SuiteTalk\\Service\\CreditMemoApplyList',
      'CreditMemoPartnersList' => 'SpauldingRidge\\SuiteTalk\\Service\\CreditMemoPartnersList',
      'CustomerRefund' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerRefund',
      'CustomerRefundApply' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerRefundApply',
      'CustomerRefundApplyList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerRefundApplyList',
      'CustomerRefundDeposit' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerRefundDeposit',
      'CustomerRefundDepositList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerRefundDepositList',
      'CustomerDeposit' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerDeposit',
      'CustomerDepositApply' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerDepositApply',
      'CustomerDepositApplyList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomerDepositApplyList',
      'DepositApplication' => 'SpauldingRidge\\SuiteTalk\\Service\\DepositApplication',
      'DepositApplicationApply' => 'SpauldingRidge\\SuiteTalk\\Service\\DepositApplicationApply',
      'DepositApplicationApplyList' => 'SpauldingRidge\\SuiteTalk\\Service\\DepositApplicationApplyList',
      'Charge' => 'SpauldingRidge\\SuiteTalk\\Service\\Charge',
      'ChargeSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ChargeSearch',
      'ChargeSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ChargeSearchAdvanced',
      'ChargeSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ChargeSearchRow',
      'Budget' => 'SpauldingRidge\\SuiteTalk\\Service\\Budget',
      'BudgetSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\BudgetSearch',
      'BudgetSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\BudgetSearchAdvanced',
      'BudgetSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\BudgetSearchRow',
      'CheckLandedCostList' => 'SpauldingRidge\\SuiteTalk\\Service\\CheckLandedCostList',
      'Check' => 'SpauldingRidge\\SuiteTalk\\Service\\Check',
      'CheckExpense' => 'SpauldingRidge\\SuiteTalk\\Service\\CheckExpense',
      'CheckExpenseList' => 'SpauldingRidge\\SuiteTalk\\Service\\CheckExpenseList',
      'CheckItem' => 'SpauldingRidge\\SuiteTalk\\Service\\CheckItem',
      'CheckItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\CheckItemList',
      'Deposit' => 'SpauldingRidge\\SuiteTalk\\Service\\Deposit',
      'DepositPayment' => 'SpauldingRidge\\SuiteTalk\\Service\\DepositPayment',
      'DepositPaymentList' => 'SpauldingRidge\\SuiteTalk\\Service\\DepositPaymentList',
      'DepositCashBack' => 'SpauldingRidge\\SuiteTalk\\Service\\DepositCashBack',
      'DepositCashBackList' => 'SpauldingRidge\\SuiteTalk\\Service\\DepositCashBackList',
      'DepositOther' => 'SpauldingRidge\\SuiteTalk\\Service\\DepositOther',
      'DepositOtherList' => 'SpauldingRidge\\SuiteTalk\\Service\\DepositOtherList',
      'InventoryAdjustment' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryAdjustment',
      'InventoryAdjustmentInventory' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryAdjustmentInventory',
      'InventoryAdjustmentInventoryList' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryAdjustmentInventoryList',
      'AssemblyBuild' => 'SpauldingRidge\\SuiteTalk\\Service\\AssemblyBuild',
      'AssemblyUnbuild' => 'SpauldingRidge\\SuiteTalk\\Service\\AssemblyUnbuild',
      'AssemblyComponent' => 'SpauldingRidge\\SuiteTalk\\Service\\AssemblyComponent',
      'AssemblyComponentList' => 'SpauldingRidge\\SuiteTalk\\Service\\AssemblyComponentList',
      'TransferOrder' => 'SpauldingRidge\\SuiteTalk\\Service\\TransferOrder',
      'TransferOrderItem' => 'SpauldingRidge\\SuiteTalk\\Service\\TransferOrderItem',
      'TransferOrderItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\TransferOrderItemList',
      'InterCompanyTransferOrder' => 'SpauldingRidge\\SuiteTalk\\Service\\InterCompanyTransferOrder',
      'InterCompanyTransferOrderItem' => 'SpauldingRidge\\SuiteTalk\\Service\\InterCompanyTransferOrderItem',
      'InterCompanyTransferOrderItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\InterCompanyTransferOrderItemList',
      'WorkOrder' => 'SpauldingRidge\\SuiteTalk\\Service\\WorkOrder',
      'WorkOrderItem' => 'SpauldingRidge\\SuiteTalk\\Service\\WorkOrderItem',
      'WorkOrderItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\WorkOrderItemList',
      'SalesTeamList' => 'SpauldingRidge\\SuiteTalk\\Service\\SalesTeamList',
      'PartnersList' => 'SpauldingRidge\\SuiteTalk\\Service\\PartnersList',
      'InventoryTransfer' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryTransfer',
      'InventoryTransferInventory' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryTransferInventory',
      'InventoryTransferInventoryList' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryTransferInventoryList',
      'BinTransfer' => 'SpauldingRidge\\SuiteTalk\\Service\\BinTransfer',
      'BinTransferInventory' => 'SpauldingRidge\\SuiteTalk\\Service\\BinTransferInventory',
      'BinTransferInventoryList' => 'SpauldingRidge\\SuiteTalk\\Service\\BinTransferInventoryList',
      'BinWorksheet' => 'SpauldingRidge\\SuiteTalk\\Service\\BinWorksheet',
      'BinWorksheetItem' => 'SpauldingRidge\\SuiteTalk\\Service\\BinWorksheetItem',
      'BinWorksheetItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\BinWorksheetItemList',
      'WorkOrderIssue' => 'SpauldingRidge\\SuiteTalk\\Service\\WorkOrderIssue',
      'WorkOrderIssueComponent' => 'SpauldingRidge\\SuiteTalk\\Service\\WorkOrderIssueComponent',
      'WorkOrderIssueComponentList' => 'SpauldingRidge\\SuiteTalk\\Service\\WorkOrderIssueComponentList',
      'WorkOrderCompletion' => 'SpauldingRidge\\SuiteTalk\\Service\\WorkOrderCompletion',
      'WorkOrderCompletionComponent' => 'SpauldingRidge\\SuiteTalk\\Service\\WorkOrderCompletionComponent',
      'WorkOrderCompletionComponentList' => 'SpauldingRidge\\SuiteTalk\\Service\\WorkOrderCompletionComponentList',
      'WorkOrderClose' => 'SpauldingRidge\\SuiteTalk\\Service\\WorkOrderClose',
      'WorkOrderCompletionOperation' => 'SpauldingRidge\\SuiteTalk\\Service\\WorkOrderCompletionOperation',
      'WorkOrderCompletionOperationList' => 'SpauldingRidge\\SuiteTalk\\Service\\WorkOrderCompletionOperationList',
      'InventoryCostRevaluation' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryCostRevaluation',
      'InventoryCostRevaluationCostComponent' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryCostRevaluationCostComponent',
      'InventoryCostRevaluationCostComponentList' => 'SpauldingRidge\\SuiteTalk\\Service\\InventoryCostRevaluationCostComponentList',
      'JournalEntry' => 'SpauldingRidge\\SuiteTalk\\Service\\JournalEntry',
      'JournalEntryLine' => 'SpauldingRidge\\SuiteTalk\\Service\\JournalEntryLine',
      'JournalEntryLineList' => 'SpauldingRidge\\SuiteTalk\\Service\\JournalEntryLineList',
      'InterCompanyJournalEntry' => 'SpauldingRidge\\SuiteTalk\\Service\\InterCompanyJournalEntry',
      'InterCompanyJournalEntryLine' => 'SpauldingRidge\\SuiteTalk\\Service\\InterCompanyJournalEntryLine',
      'InterCompanyJournalEntryLineList' => 'SpauldingRidge\\SuiteTalk\\Service\\InterCompanyJournalEntryLineList',
      'StatisticalJournalEntry' => 'SpauldingRidge\\SuiteTalk\\Service\\StatisticalJournalEntry',
      'StatisticalJournalEntryLine' => 'SpauldingRidge\\SuiteTalk\\Service\\StatisticalJournalEntryLine',
      'StatisticalJournalEntryLineList' => 'SpauldingRidge\\SuiteTalk\\Service\\StatisticalJournalEntryLineList',
      'InterCompanyJournalEntryAccountingBookDetail' => 'SpauldingRidge\\SuiteTalk\\Service\\InterCompanyJournalEntryAccountingBookDetail',
      'InterCompanyJournalEntryAccountingBookDetailList' => 'SpauldingRidge\\SuiteTalk\\Service\\InterCompanyJournalEntryAccountingBookDetailList',
      'AdvInterCompanyJournalEntry' => 'SpauldingRidge\\SuiteTalk\\Service\\AdvInterCompanyJournalEntry',
      'AdvInterCompanyJournalEntryLine' => 'SpauldingRidge\\SuiteTalk\\Service\\AdvInterCompanyJournalEntryLine',
      'AdvInterCompanyJournalEntryLineList' => 'SpauldingRidge\\SuiteTalk\\Service\\AdvInterCompanyJournalEntryLineList',
      'AdvInterCompanyJournalEntryAccountingBookDetail' => 'SpauldingRidge\\SuiteTalk\\Service\\AdvInterCompanyJournalEntryAccountingBookDetail',
      'AdvInterCompanyJournalEntryAccountingBookDetailList' => 'SpauldingRidge\\SuiteTalk\\Service\\AdvInterCompanyJournalEntryAccountingBookDetailList',
      'PeriodEndJournal' => 'SpauldingRidge\\SuiteTalk\\Service\\PeriodEndJournal',
      'PeriodEndJournalLine' => 'SpauldingRidge\\SuiteTalk\\Service\\PeriodEndJournalLine',
      'PeriodEndJournalLineList' => 'SpauldingRidge\\SuiteTalk\\Service\\PeriodEndJournalLineList',
      'CustomRecord' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecord',
      'CustomRecordSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordSearch',
      'CustomRecordSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordSearchAdvanced',
      'CustomRecordSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordSearchRow',
      'CustomList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomList',
      'CustomListCustomValue' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomListCustomValue',
      'CustomListCustomValueList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomListCustomValueList',
      'CustomListTranslations' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomListTranslations',
      'CustomListTranslationsList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomListTranslationsList',
      'CustomRecordType' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordType',
      'CustomRecordTypeFieldList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeFieldList',
      'CustomRecordTypeTabs' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeTabs',
      'CustomRecordTypeTabsList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeTabsList',
      'CustomRecordTypeForms' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeForms',
      'CustomRecordTypeFormsList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeFormsList',
      'CustomRecordTypeOnlineForms' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeOnlineForms',
      'CustomRecordTypeOnlineFormsList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeOnlineFormsList',
      'CustomRecordTypePermissions' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypePermissions',
      'CustomRecordTypePermissionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypePermissionsList',
      'CustomRecordTypeLinks' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeLinks',
      'CustomRecordTypeLinksList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeLinksList',
      'CustomRecordTypeManagers' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeManagers',
      'CustomRecordTypeManagersList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeManagersList',
      'CustomRecordTypeChildren' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeChildren',
      'CustomRecordTypeChildrenList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeChildrenList',
      'CustomRecordTypeParents' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeParents',
      'CustomRecordTypeParentsList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeParentsList',
      'CustomRecordTypeTranslations' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeTranslations',
      'CustomRecordTypeTranslationsList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeTranslationsList',
      'CustomRecordTypeSublists' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeSublists',
      'CustomRecordTypeSublistsList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTypeSublistsList',
      'CustomFieldType' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomFieldType',
      'EntityCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\EntityCustomField',
      'EntityCustomFieldFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\EntityCustomFieldFilter',
      'EntityCustomFieldFilterList' => 'SpauldingRidge\\SuiteTalk\\Service\\EntityCustomFieldFilterList',
      'FldFilterSelList' => 'SpauldingRidge\\SuiteTalk\\Service\\FldFilterSelList',
      'CrmCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\CrmCustomField',
      'CrmCustomFieldFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\CrmCustomFieldFilter',
      'CrmCustomFieldFilterList' => 'SpauldingRidge\\SuiteTalk\\Service\\CrmCustomFieldFilterList',
      'OtherCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherCustomField',
      'OtherCustomFieldFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherCustomFieldFilter',
      'OtherCustomFieldFilterList' => 'SpauldingRidge\\SuiteTalk\\Service\\OtherCustomFieldFilterList',
      'ItemCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemCustomField',
      'ItemCustomFieldFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemCustomFieldFilter',
      'ItemCustomFieldFilterList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemCustomFieldFilterList',
      'TransactionBodyCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\TransactionBodyCustomField',
      'TransactionBodyCustomFieldFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\TransactionBodyCustomFieldFilter',
      'TransactionBodyCustomFieldFilterList' => 'SpauldingRidge\\SuiteTalk\\Service\\TransactionBodyCustomFieldFilterList',
      'TransactionColumnCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\TransactionColumnCustomField',
      'TransactionColumnCustomFieldFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\TransactionColumnCustomFieldFilter',
      'TransactionColumnCustomFieldFilterList' => 'SpauldingRidge\\SuiteTalk\\Service\\TransactionColumnCustomFieldFilterList',
      'ItemOptionCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemOptionCustomField',
      'ItemsList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemsList',
      'ItemOptionCustomFieldFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemOptionCustomFieldFilter',
      'ItemOptionCustomFieldFilterList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemOptionCustomFieldFilterList',
      'CustomRecordCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordCustomField',
      'CustomRecordCustomFieldFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordCustomFieldFilter',
      'CustomRecordCustomFieldFilterList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordCustomFieldFilterList',
      'CustomFieldRoleAccess' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomFieldRoleAccess',
      'CustomFieldRoleAccessList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomFieldRoleAccessList',
      'CustomFieldDepartmentAccess' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomFieldDepartmentAccess',
      'CustomFieldDepartmentAccessList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomFieldDepartmentAccessList',
      'CustomFieldSubAccess' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomFieldSubAccess',
      'CustomFieldSubAccessList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomFieldSubAccessList',
      'LanguageValue' => 'SpauldingRidge\\SuiteTalk\\Service\\LanguageValue',
      'LanguageValueList' => 'SpauldingRidge\\SuiteTalk\\Service\\LanguageValueList',
      'CustomFieldTranslations' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomFieldTranslations',
      'CustomFieldTranslationsList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomFieldTranslationsList',
      'ItemNumberCustomField' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemNumberCustomField',
      'ItemNumberCustomFieldFilter' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemNumberCustomFieldFilter',
      'ItemNumberCustomFieldFilterList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemNumberCustomFieldFilterList',
      'CustomListSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomListSearch',
      'CustomListSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomListSearchAdvanced',
      'CustomListSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomListSearchRow',
      'CustomRecordTranslations' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTranslations',
      'CustomRecordTranslationsList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomRecordTranslationsList',
      'CustomTransaction' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomTransaction',
      'CustomTransactionLine' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomTransactionLine',
      'CustomTransactionLineList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomTransactionLineList',
      'CustomSegment' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomSegment',
      'CustomSale' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomSale',
      'CustomSaleItem' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomSaleItem',
      'CustomSaleItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomSaleItemList',
      'CustomSaleShipGroup' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomSaleShipGroup',
      'CustomSaleShipGroupList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomSaleShipGroupList',
      'CustomSalePartnersList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomSalePartnersList',
      'CustomSaleSalesTeam' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomSaleSalesTeam',
      'CustomSaleSalesTeamList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomSaleSalesTeamList',
      'CustomPurchase' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomPurchase',
      'CustomPurchaseExpense' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomPurchaseExpense',
      'CustomPurchaseExpenseList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomPurchaseExpenseList',
      'CustomPurchaseItem' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomPurchaseItem',
      'CustomPurchaseItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\CustomPurchaseItemList',
      'Employee' => 'SpauldingRidge\\SuiteTalk\\Service\\Employee',
      'EmployeeSubscriptions' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeSubscriptions',
      'EmployeeSubscriptionsList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeSubscriptionsList',
      'EmployeeAddressbook' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeAddressbook',
      'EmployeeAddressbookList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeAddressbookList',
      'EmployeeRoles' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeRoles',
      'EmployeeRolesList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeRolesList',
      'EmployeeSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeSearch',
      'EmployeeSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeSearchAdvanced',
      'EmployeeSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeSearchRow',
      'EmployeeEmergencyContact' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeEmergencyContact',
      'EmployeeEmergencyContactList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeEmergencyContactList',
      'EmployeeHrEducation' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeHrEducation',
      'EmployeeHrEducationList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeHrEducationList',
      'EmployeeAccruedTime' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeAccruedTime',
      'EmployeeAccruedTimeList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeAccruedTimeList',
      'EmployeeDeduction' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeDeduction',
      'EmployeeDeductionList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeDeductionList',
      'EmployeeCompanyContribution' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeCompanyContribution',
      'EmployeeCompanyContributionList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeCompanyContributionList',
      'EmployeeEarning' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeEarning',
      'EmployeeEarningList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeEarningList',
      'EmployeeDirectDeposit' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeDirectDeposit',
      'EmployeeDirectDepositList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeDirectDepositList',
      'PayrollItem' => 'SpauldingRidge\\SuiteTalk\\Service\\PayrollItem',
      'PayrollItemSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\PayrollItemSearch',
      'PayrollItemSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\PayrollItemSearchAdvanced',
      'PayrollItemSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\PayrollItemSearchRow',
      'EmployeeRates' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeRates',
      'EmployeeRatesList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeRatesList',
      'HcmJob' => 'SpauldingRidge\\SuiteTalk\\Service\\HcmJob',
      'HcmJobSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\HcmJobSearch',
      'HcmJobSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\HcmJobSearchAdvanced',
      'HcmJobSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\HcmJobSearchRow',
      'EmployeeHcmPosition' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeHcmPosition',
      'EmployeeHcmPositionList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeHcmPositionList',
      'EmployeeCurrency' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeCurrency',
      'EmployeeCurrencyList' => 'SpauldingRidge\\SuiteTalk\\Service\\EmployeeCurrencyList',
      'SiteCategoryTranslation' => 'SpauldingRidge\\SuiteTalk\\Service\\SiteCategoryTranslation',
      'SiteCategoryTranslationList' => 'SpauldingRidge\\SuiteTalk\\Service\\SiteCategoryTranslationList',
      'SiteCategoryPresentationItemList' => 'SpauldingRidge\\SuiteTalk\\Service\\SiteCategoryPresentationItemList',
      'SiteCategorySearch' => 'SpauldingRidge\\SuiteTalk\\Service\\SiteCategorySearch',
      'SiteCategorySearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\SiteCategorySearchAdvanced',
      'SiteCategorySearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\SiteCategorySearchRow',
      'TimeBill' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeBill',
      'TimeBillSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeBillSearch',
      'TimeBillSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeBillSearchAdvanced',
      'TimeBillSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeBillSearchRow',
      'ExpenseReport' => 'SpauldingRidge\\SuiteTalk\\Service\\ExpenseReport',
      'ExpenseReportExpense' => 'SpauldingRidge\\SuiteTalk\\Service\\ExpenseReportExpense',
      'ExpenseReportExpenseList' => 'SpauldingRidge\\SuiteTalk\\Service\\ExpenseReportExpenseList',
      'PaycheckJournal' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckJournal',
      'PaycheckJournalCompanyTax' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckJournalCompanyTax',
      'PaycheckJournalCompanyTaxList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckJournalCompanyTaxList',
      'PaycheckJournalDeduction' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckJournalDeduction',
      'PaycheckJournalDeductionList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckJournalDeductionList',
      'PaycheckJournalCompanyContribution' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckJournalCompanyContribution',
      'PaycheckJournalCompanyContributionList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckJournalCompanyContributionList',
      'PaycheckJournalEarning' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckJournalEarning',
      'PaycheckJournalEarningList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckJournalEarningList',
      'PaycheckJournalEmployeeTax' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckJournalEmployeeTax',
      'PaycheckJournalEmployeeTaxList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckJournalEmployeeTaxList',
      'TimeEntry' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeEntry',
      'TimeSheet' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeSheet',
      'TimeSheetTimeGrid' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeSheetTimeGrid',
      'TimeSheetTimeGridList' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeSheetTimeGridList',
      'TimeEntrySearch' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeEntrySearch',
      'TimeEntrySearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeEntrySearchAdvanced',
      'TimeEntrySearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeEntrySearchRow',
      'TimeSheetSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeSheetSearch',
      'TimeSheetSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeSheetSearchAdvanced',
      'TimeSheetSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\TimeSheetSearchRow',
      'Paycheck' => 'SpauldingRidge\\SuiteTalk\\Service\\Paycheck',
      'PaycheckPayTime' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayTime',
      'PaycheckPayTimeList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayTimeList',
      'PaycheckPayExp' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayExp',
      'PaycheckPayExpList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayExpList',
      'PaycheckPayDisburse' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayDisburse',
      'PaycheckPayDisburseList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayDisburseList',
      'PaycheckPaySummary' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPaySummary',
      'PaycheckPaySummaryList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPaySummaryList',
      'PaycheckPayDeduct' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayDeduct',
      'PaycheckPayDeductList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayDeductList',
      'PaycheckPayPto' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayPto',
      'PaycheckPayPtoList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayPtoList',
      'PaycheckPayTax' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayTax',
      'PaycheckPayTaxList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayTaxList',
      'PaycheckPayEarn' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayEarn',
      'PaycheckPayEarnList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayEarnList',
      'PaycheckPayContrib' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayContrib',
      'PaycheckPayContribList' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckPayContribList',
      'PaycheckSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckSearch',
      'PaycheckSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckSearchAdvanced',
      'PaycheckSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\PaycheckSearchRow',
      'CampaignResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignResponse',
      'Campaign' => 'SpauldingRidge\\SuiteTalk\\Service\\Campaign',
      'CampaignEmail' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignEmail',
      'CampaignEmailList' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignEmailList',
      'CampaignDirectMail' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignDirectMail',
      'CampaignDirectMailList' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignDirectMailList',
      'CampaignEvent' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignEvent',
      'CampaignEventList' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignEventList',
      'CampaignEventResponse' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignEventResponse',
      'CampaignEventResponseList' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignEventResponseList',
      'CampaignSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignSearch',
      'CampaignSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignSearchAdvanced',
      'CampaignSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignSearchRow',
      'CampaignCategory' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignCategory',
      'CampaignAudience' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignAudience',
      'CampaignFamily' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignFamily',
      'CampaignSearchEngine' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignSearchEngine',
      'CampaignChannel' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignChannel',
      'CampaignOffer' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignOffer',
      'CampaignResponseResponses' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignResponseResponses',
      'CampaignResponseResponsesList' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignResponseResponsesList',
      'CampaignVertical' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignVertical',
      'CampaignSubscription' => 'SpauldingRidge\\SuiteTalk\\Service\\CampaignSubscription',
      'PromotionCode' => 'SpauldingRidge\\SuiteTalk\\Service\\PromotionCode',
      'PromotionCodePartners' => 'SpauldingRidge\\SuiteTalk\\Service\\PromotionCodePartners',
      'PromotionCodePartnersList' => 'SpauldingRidge\\SuiteTalk\\Service\\PromotionCodePartnersList',
      'PromotionCodeItems' => 'SpauldingRidge\\SuiteTalk\\Service\\PromotionCodeItems',
      'PromotionCodeItemsList' => 'SpauldingRidge\\SuiteTalk\\Service\\PromotionCodeItemsList',
      'PromotionCodeSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\PromotionCodeSearch',
      'PromotionCodeSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\PromotionCodeSearchAdvanced',
      'PromotionCodeSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\PromotionCodeSearchRow',
      'PromotionCodeCurrency' => 'SpauldingRidge\\SuiteTalk\\Service\\PromotionCodeCurrency',
      'PromotionCodeCurrencyList' => 'SpauldingRidge\\SuiteTalk\\Service\\PromotionCodeCurrencyList',
      'CouponCode' => 'SpauldingRidge\\SuiteTalk\\Service\\CouponCode',
      'CouponCodeSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\CouponCodeSearch',
      'CouponCodeSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\CouponCodeSearchAdvanced',
      'CouponCodeSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\CouponCodeSearchRow',
      'ItemDemandPlan' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemDemandPlan',
      'DemandPlan' => 'SpauldingRidge\\SuiteTalk\\Service\\DemandPlan',
      'DemandPlanMatrix' => 'SpauldingRidge\\SuiteTalk\\Service\\DemandPlanMatrix',
      'PeriodDemandPlanList' => 'SpauldingRidge\\SuiteTalk\\Service\\PeriodDemandPlanList',
      'PeriodDemandPlan' => 'SpauldingRidge\\SuiteTalk\\Service\\PeriodDemandPlan',
      'ItemDemandPlanSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemDemandPlanSearch',
      'ItemDemandPlanSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemDemandPlanSearchAdvanced',
      'ItemDemandPlanSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemDemandPlanSearchRow',
      'ItemSupplyPlan' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemSupplyPlan',
      'ItemSupplyPlanOrder' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemSupplyPlanOrder',
      'ItemSupplyPlanOrderList' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemSupplyPlanOrderList',
      'ItemSupplyPlanSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemSupplyPlanSearch',
      'ItemSupplyPlanSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemSupplyPlanSearchAdvanced',
      'ItemSupplyPlanSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ItemSupplyPlanSearchRow',
      'ManufacturingCostTemplate' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingCostTemplate',
      'ManufacturingCostDetail' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingCostDetail',
      'ManufacturingCostDetailList' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingCostDetailList',
      'ManufacturingCostTemplateSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingCostTemplateSearch',
      'ManufacturingCostTemplateSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingCostTemplateSearchAdvanced',
      'ManufacturingCostTemplateSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingCostTemplateSearchRow',
      'ManufacturingRouting' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingRouting',
      'ManufacturingRoutingRoutingStep' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingRoutingRoutingStep',
      'ManufacturingRoutingRoutingStepList' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingRoutingRoutingStepList',
      'ManufacturingRoutingSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingRoutingSearch',
      'ManufacturingRoutingSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingRoutingSearchAdvanced',
      'ManufacturingRoutingSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingRoutingSearchRow',
      'ManufacturingOperationTask' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingOperationTask',
      'ManufacturingOperationTaskSearch' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingOperationTaskSearch',
      'ManufacturingOperationTaskSearchAdvanced' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingOperationTaskSearchAdvanced',
      'ManufacturingOperationTaskSearchRow' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingOperationTaskSearchRow',
      'ManufacturingOperationTaskPredecessor' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingOperationTaskPredecessor',
      'ManufacturingOperationTaskPredecessorList' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingOperationTaskPredecessorList',
      'ManufacturingRoutingRoutingComponent' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingRoutingRoutingComponent',
      'ManufacturingRoutingRoutingComponentList' => 'SpauldingRidge\\SuiteTalk\\Service\\ManufacturingRoutingRoutingComponentList',
    );

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://webservices.netsuite.com/wsdl/v2020_1_0/netsuite.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param ChangePasswordRequest $parameters
     * @return ChangePasswordResponse
     */
    public function changePassword(ChangePasswordRequest $parameters)
    {
      return $this->__soapCall('changePassword', array($parameters));
    }

    /**
     * @param ChangeEmailRequest $parameters
     * @return ChangeEmailResponse
     */
    public function changeEmail(ChangeEmailRequest $parameters)
    {
      return $this->__soapCall('changeEmail', array($parameters));
    }

    /**
     * @param AddRequest $parameters
     * @return AddResponse
     */
    public function add(AddRequest $parameters)
    {
      return $this->__soapCall('add', array($parameters));
    }

    /**
     * @param DeleteRequest $parameters
     * @return DeleteResponse
     */
    public function delete(DeleteRequest $parameters)
    {
      return $this->__soapCall('delete', array($parameters));
    }

    /**
     * @param SearchRequest $parameters
     * @return SearchResponse
     */
    public function search(SearchRequest $parameters)
    {
      return $this->__soapCall('search', array($parameters));
    }

    /**
     * @param SearchMoreWithIdRequest $parameters
     * @return SearchMoreWithIdResponse
     */
    public function searchMoreWithId(SearchMoreWithIdRequest $parameters)
    {
      return $this->__soapCall('searchMoreWithId', array($parameters));
    }

    /**
     * @param UpdateRequest $parameters
     * @return UpdateResponse
     */
    public function update(UpdateRequest $parameters)
    {
      return $this->__soapCall('update', array($parameters));
    }

    /**
     * @param UpsertRequest $parameters
     * @return UpsertResponse
     */
    public function upsert(UpsertRequest $parameters)
    {
      return $this->__soapCall('upsert', array($parameters));
    }

    /**
     * @param AddListRequest $parameters
     * @return AddListResponse
     */
    public function addList(AddListRequest $parameters)
    {
      return $this->__soapCall('addList', array($parameters));
    }

    /**
     * @param DeleteListRequest $parameters
     * @return DeleteListResponse
     */
    public function deleteList(DeleteListRequest $parameters)
    {
      return $this->__soapCall('deleteList', array($parameters));
    }

    /**
     * @param UpdateListRequest $parameters
     * @return UpdateListResponse
     */
    public function updateList(UpdateListRequest $parameters)
    {
      return $this->__soapCall('updateList', array($parameters));
    }

    /**
     * @param UpsertListRequest $parameters
     * @return UpsertListResponse
     */
    public function upsertList(UpsertListRequest $parameters)
    {
      return $this->__soapCall('upsertList', array($parameters));
    }

    /**
     * @param GetRequest $parameters
     * @return GetResponse
     */
    public function get(GetRequest $parameters)
    {
      return $this->__soapCall('get', array($parameters));
    }

    /**
     * @param GetListRequest $parameters
     * @return GetListResponse
     */
    public function getList(GetListRequest $parameters)
    {
      return $this->__soapCall('getList', array($parameters));
    }

    /**
     * @param GetAllRequest $parameters
     * @return GetAllResponse
     */
    public function getAll(GetAllRequest $parameters)
    {
      return $this->__soapCall('getAll', array($parameters));
    }

    /**
     * @param GetSavedSearchRequest $parameters
     * @return GetSavedSearchResponse
     */
    public function getSavedSearch(GetSavedSearchRequest $parameters)
    {
      return $this->__soapCall('getSavedSearch', array($parameters));
    }

    /**
     * @param GetCustomizationIdRequest $parameters
     * @return GetCustomizationIdResponse
     */
    public function getCustomizationId(GetCustomizationIdRequest $parameters)
    {
      return $this->__soapCall('getCustomizationId', array($parameters));
    }

    /**
     * @param InitializeRequest $parameters
     * @return InitializeResponse
     */
    public function initialize(InitializeRequest $parameters)
    {
      return $this->__soapCall('initialize', array($parameters));
    }

    /**
     * @param InitializeListRequest $parameters
     * @return InitializeListResponse
     */
    public function initializeList(InitializeListRequest $parameters)
    {
      return $this->__soapCall('initializeList', array($parameters));
    }

    /**
     * @param getSelectValueRequest $parameters
     * @return getSelectValueResponse
     */
    public function getSelectValue(getSelectValueRequest $parameters)
    {
      return $this->__soapCall('getSelectValue', array($parameters));
    }

    /**
     * @param GetItemAvailabilityRequest $parameters
     * @return GetItemAvailabilityResponse
     */
    public function getItemAvailability(GetItemAvailabilityRequest $parameters)
    {
      return $this->__soapCall('getItemAvailability', array($parameters));
    }

    /**
     * @param GetBudgetExchangeRateRequest $parameters
     * @return GetBudgetExchangeRateResponse
     */
    public function getBudgetExchangeRate(GetBudgetExchangeRateRequest $parameters)
    {
      return $this->__soapCall('getBudgetExchangeRate', array($parameters));
    }

    /**
     * @param GetCurrencyRateRequest $parameters
     * @return GetCurrencyRateResponse
     */
    public function getCurrencyRate(GetCurrencyRateRequest $parameters)
    {
      return $this->__soapCall('getCurrencyRate', array($parameters));
    }

    /**
     * @param GetDataCenterUrlsRequest $parameters
     * @return GetDataCenterUrlsResponse
     */
    public function getDataCenterUrls(GetDataCenterUrlsRequest $parameters)
    {
      return $this->__soapCall('getDataCenterUrls', array($parameters));
    }

    /**
     * @param GetPostingTransactionSummaryRequest $parameters
     * @return GetPostingTransactionSummaryResponse
     */
    public function getPostingTransactionSummary(GetPostingTransactionSummaryRequest $parameters)
    {
      return $this->__soapCall('getPostingTransactionSummary', array($parameters));
    }

    /**
     * @param GetServerTimeRequest $parameters
     * @return GetServerTimeResponse
     */
    public function getServerTime(GetServerTimeRequest $parameters)
    {
      return $this->__soapCall('getServerTime', array($parameters));
    }

    /**
     * @param AttachRequest $parameters
     * @return AttachResponse
     */
    public function attach(AttachRequest $parameters)
    {
      return $this->__soapCall('attach', array($parameters));
    }

    /**
     * @param DetachRequest $parameters
     * @return DetachResponse
     */
    public function detach(DetachRequest $parameters)
    {
      return $this->__soapCall('detach', array($parameters));
    }

    /**
     * @param UpdateInviteeStatusRequest $parameters
     * @return UpdateInviteeStatusResponse
     */
    public function updateInviteeStatus(UpdateInviteeStatusRequest $parameters)
    {
      return $this->__soapCall('updateInviteeStatus', array($parameters));
    }

    /**
     * @param UpdateInviteeStatusListRequest $parameters
     * @return UpdateInviteeStatusListResponse
     */
    public function updateInviteeStatusList(UpdateInviteeStatusListRequest $parameters)
    {
      return $this->__soapCall('updateInviteeStatusList', array($parameters));
    }

    /**
     * @param AsyncAddListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncAddList(AsyncAddListRequest $parameters)
    {
      return $this->__soapCall('asyncAddList', array($parameters));
    }

    /**
     * @param AsyncUpdateListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncUpdateList(AsyncUpdateListRequest $parameters)
    {
      return $this->__soapCall('asyncUpdateList', array($parameters));
    }

    /**
     * @param AsyncUpsertListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncUpsertList(AsyncUpsertListRequest $parameters)
    {
      return $this->__soapCall('asyncUpsertList', array($parameters));
    }

    /**
     * @param AsyncDeleteListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncDeleteList(AsyncDeleteListRequest $parameters)
    {
      return $this->__soapCall('asyncDeleteList', array($parameters));
    }

    /**
     * @param AsyncGetListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncGetList(AsyncGetListRequest $parameters)
    {
      return $this->__soapCall('asyncGetList', array($parameters));
    }

    /**
     * @param AsyncInitializeListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncInitializeList(AsyncInitializeListRequest $parameters)
    {
      return $this->__soapCall('asyncInitializeList', array($parameters));
    }

    /**
     * @param AsyncSearchRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncSearch(AsyncSearchRequest $parameters)
    {
      return $this->__soapCall('asyncSearch', array($parameters));
    }

    /**
     * @param GetAsyncResultRequest $parameters
     * @return GetAsyncResultResponse
     */
    public function getAsyncResult(GetAsyncResultRequest $parameters)
    {
      return $this->__soapCall('getAsyncResult', array($parameters));
    }

    /**
     * @param CheckAsyncStatusRequest $parameters
     * @return AsyncStatusResponse
     */
    public function checkAsyncStatus(CheckAsyncStatusRequest $parameters)
    {
      return $this->__soapCall('checkAsyncStatus', array($parameters));
    }

    /**
     * @param GetDeletedRequest $parameters
     * @return GetDeletedResponse
     */
    public function getDeleted(GetDeletedRequest $parameters)
    {
      return $this->__soapCall('getDeleted', array($parameters));
    }

    /**
     * @param GetAccountGovernanceInfoRequest $parameters
     * @return GetAccountGovernanceInfoResponse
     */
    public function getAccountGovernanceInfo(GetAccountGovernanceInfoRequest $parameters)
    {
      return $this->__soapCall('getAccountGovernanceInfo', array($parameters));
    }

    /**
     * @param GetIntegrationGovernanceInfoRequest $parameters
     * @return GetIntegrationGovernanceInfoResponse
     */
    public function getIntegrationGovernanceInfo(GetIntegrationGovernanceInfoRequest $parameters)
    {
      return $this->__soapCall('getIntegrationGovernanceInfo', array($parameters));
    }

}
