<?php

namespace SpauldingRidge\SuiteTalk;
	
use SoapHeader;


class SuiteTalkClient extends Service\NetSuiteService {
       
    private $soapHeaders = array();
    private $preferences;
    private $searchPreferences;
    private $queue = null;

    public function __construct($wsdl=null, $options=[]) {
        
        /* Set Default Preferences and Search Preferences */
        
        $this->setPreferences();
        $this->setSearchPreferences();
        
        parent::__construct($options, $wsdl);
    }

    public function setPreferences ($warningAsError = false, $disableMandatoryCustomFieldValidation = false, $disableSystemNotesForCustomFields = false,  $ignoreReadOnlyFields = false, $runServerSuiteScriptAndTriggerWorkflows = null)    
    {
        $sp = new Service\Preferences();
        $sp = $sp
            ->setWarningAsError(
                $warningAsError
            )->setDisableMandatoryCustomFieldValidation(
                $disableMandatoryCustomFieldValidation
            )->setDisableSystemNotesForCustomFields(
                $disableSystemNotesForCustomFields
            )->setIgnoreReadOnlyFields(
                $ignoreReadOnlyFields
            )->setRunServerSuiteScriptAndTriggerWorkflows(
                $runServerSuiteScriptAndTriggerWorkflows
            );          

        $this->preferences = $sp;
    }          
                
    public function clearPreferences() {
        $this->preferences = null;
    }        

    public function setSearchPreferences ($bodyFieldsOnly = true, $pageSize = 50, $returnSearchColumns = true)
    {
        $sp = new Service\SearchPreferences();
        $sp = $sp
            ->setBodyFieldsOnly($bodyFieldsOnly)
            ->setPageSize($pageSize)
            ->setReturnSearchColumns($returnSearchColumns);

        $this->searchPreferences = $sp;
    }

    public function clearSearchPreferences() {
        $this->searchPreferences = null;
    }

    private function addHeader($header_name, $header) {
        $this->soapHeaders[$header_name] = new SoapHeader("ns", $header_name, $header);
    }
    
    private function clearHeaders() {
        $this->soapHeaders = array();
    }

    protected function makeSoapCall() {
            
        $token = new SuiteTalkPassportGenerator();
        
        $this->clearHeaders();
        $this->addHeader("tokenPassport", $token->generateTokenPassport());
        if ($this->preferences){
            $this->addHeader('preferences', $this->preferences);
        }
        if ($this->searchPreferences){
            $this->addHeader('searchPreferences', $this->searchPreferences);
        }

        return $this;
       
    }
    
    /**
     * @param ChangePasswordRequest $parameters
     * @return ChangePasswordResponse
     */
    public function changePassword(Service\ChangePasswordRequest $parameters)
    {
        return $this->makeSoapCall()->__soapCall('changePassword', array($parameters), NULL, $this->soapHeaders);
    }

    /**
     * @param ChangeEmailRequest $parameters
     * @return ChangeEmailResponse
     */
    public function changeEmail(Service\ChangeEmailRequest $parameters)
    {
      return $this->makeSoapCall('changeEmail', array($parameters));
    }

    /**
     * @param AddRequest $parameters
     * @return AddResponse
     */
    public function add(Service\AddRequest $parameters)
    {
      return $this->makeSoapCall('add', array($parameters));
    }

    /**
     * @param DeleteRequest $parameters
     * @return DeleteResponse
     */
    public function delete(Service\DeleteRequest $parameters)
    {
      return $this->makeSoapCall('delete', array($parameters));
    }

    /**
     * @param SearchRequest $parameters
     * @return SearchResponse
     */
    public function search(Service\SearchRequest $parameters)
    {
      return $this->makeSoapCall('search', array($parameters));
    }

    /**
     * @param SearchMoreWithIdRequest $parameters
     * @return SearchMoreWithIdResponse
     */
    public function searchMoreWithId(Service\SearchMoreWithIdRequest $parameters)
    {
      return $this->makeSoapCall('searchMoreWithId', array($parameters));
    }

    /**
     * @param UpdateRequest $parameters
     * @return UpdateResponse
     */
    public function update(Service\UpdateRequest $parameters)
    {
      return $this->makeSoapCall('update', array($parameters));
    }

    /**
     * @param UpsertRequest $parameters
     * @return UpsertResponse
     */
    public function upsert(Service\UpsertRequest $parameters)
    {
      return $this->makeSoapCall('upsert', array($parameters));
    }

    /**
     * @param AddListRequest $parameters
     * @return AddListResponse
     */
    public function addList(Service\AddListRequest $parameters)
    {
      return $this->makeSoapCall('addList', array($parameters));
    }

    /**
     * @param DeleteListRequest $parameters
     * @return DeleteListResponse
     */
    public function deleteList(Service\DeleteListRequest $parameters)
    {
      return $this->makeSoapCall('deleteList', array($parameters));
    }

    /**
     * @param UpdateListRequest $parameters
     * @return UpdateListResponse
     */
    public function updateList(Service\UpdateListRequest $parameters)
    {
      return $this->makeSoapCall('updateList', array($parameters));
    }

    /**
     * @param UpsertListRequest $parameters
     * @return UpsertListResponse
     */
    public function upsertList(Service\UpsertListRequest $parameters)
    {
      return $this->makeSoapCall('upsertList', array($parameters));
    }

    /**
     * @param GetRequest $parameters
     * @return GetResponse
     */
    public function get(Service\GetRequest $parameters)
    {
        return $this->makeSoapCall()->__soapCall('get', array($parameters), NULL, $this->soapHeaders);
    }

    /**
     * @param GetListRequest $parameters
     * @return GetListResponse
     */
    public function getList(Service\GetListRequest $parameters)
    {
        $this->makeSoapCall();
        return $this->makeSoapCall('getList', array($parameters), NULL, $this->soapHeaders);
    }

    /**
     * @param GetAllRequest $parameters
     * @return GetAllResponse
     */
    public function getAll(Service\GetAllRequest $parameters)
    {
        $this->makeSoapCall();
        return $this->makeSoapCall('getAll', array($parameters), NULL, $this->soapHeaders);
    }

    /**
     * @param GetSavedSearchRequest $parameters
     * @return GetSavedSearchResponse
     */
    public function getSavedSearch(Service\GetSavedSearchRequest $parameters)
    {
      return $this->makeSoapCall('getSavedSearch', array($parameters));
    }

    /**
     * @param GetCustomizationIdRequest $parameters
     * @return GetCustomizationIdResponse
     */
    public function getCustomizationId(Service\GetCustomizationIdRequest $parameters)
    {
      return $this->makeSoapCall('getCustomizationId', array($parameters));
    }

    /**
     * @param InitializeRequest $parameters
     * @return InitializeResponse
     */
    public function initialize(Service\InitializeRequest $parameters)
    {
      return $this->makeSoapCall('initialize', array($parameters));
    }

    /**
     * @param InitializeListRequest $parameters
     * @return InitializeListResponse
     */
    public function initializeList(Service\InitializeListRequest $parameters)
    {
      return $this->makeSoapCall('initializeList', array($parameters));
    }

    /**
     * @param getSelectValueRequest $parameters
     * @return getSelectValueResponse
     */
    public function getSelectValue(Service\getSelectValueRequest $parameters)
    {
      return $this->makeSoapCall('getSelectValue', array($parameters));
    }

    /**
     * @param GetItemAvailabilityRequest $parameters
     * @return GetItemAvailabilityResponse
     */
    public function getItemAvailability(Service\GetItemAvailabilityRequest $parameters)
    {
      return $this->makeSoapCall('getItemAvailability', array($parameters));
    }

    /**
     * @param GetBudgetExchangeRateRequest $parameters
     * @return GetBudgetExchangeRateResponse
     */
    public function getBudgetExchangeRate(Service\GetBudgetExchangeRateRequest $parameters)
    {
      return $this->makeSoapCall('getBudgetExchangeRate', array($parameters));
    }

    /**
     * @param GetCurrencyRateRequest $parameters
     * @return GetCurrencyRateResponse
     */
    public function getCurrencyRate(Service\GetCurrencyRateRequest $parameters)
    {
      return $this->makeSoapCall('getCurrencyRate', array($parameters));
    }

    /**
     * @param GetDataCenterUrlsRequest $parameters
     * @return GetDataCenterUrlsResponse
     */
    public function getDataCenterUrls(Service\GetDataCenterUrlsRequest $parameters)
    {
      return $this->makeSoapCall('getDataCenterUrls', array($parameters));
    }

    /**
     * @param GetPostingTransactionSummaryRequest $parameters
     * @return GetPostingTransactionSummaryResponse
     */
    public function getPostingTransactionSummary(Service\GetPostingTransactionSummaryRequest $parameters)
    {
      return $this->makeSoapCall('getPostingTransactionSummary', array($parameters));
    }

    /**
     * @param GetServerTimeRequest $parameters
     * @return GetServerTimeResponse
     */
    public function getServerTime(Service\GetServerTimeRequest $parameters)
    {
      return $this->makeSoapCall('getServerTime', array($parameters));
    }

    /**
     * @param AttachRequest $parameters
     * @return AttachResponse
     */
    public function attach(Service\AttachRequest $parameters)
    {
      return $this->makeSoapCall('attach', array($parameters));
    }

    /**
     * @param DetachRequest $parameters
     * @return DetachResponse
     */
    public function detach(Service\DetachRequest $parameters)
    {
      return $this->makeSoapCall('detach', array($parameters));
    }

    /**
     * @param UpdateInviteeStatusRequest $parameters
     * @return UpdateInviteeStatusResponse
     */
    public function updateInviteeStatus(Service\UpdateInviteeStatusRequest $parameters)
    {
      return $this->makeSoapCall('updateInviteeStatus', array($parameters));
    }

    /**
     * @param UpdateInviteeStatusListRequest $parameters
     * @return UpdateInviteeStatusListResponse
     */
    public function updateInviteeStatusList(Service\UpdateInviteeStatusListRequest $parameters)
    {
      return $this->makeSoapCall('updateInviteeStatusList', array($parameters));
    }

    /**
     * @param AsyncAddListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncAddList(Service\AsyncAddListRequest $parameters)
    {
      return $this->makeSoapCall('asyncAddList', array($parameters));
    }

    /**
     * @param AsyncUpdateListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncUpdateList(Service\AsyncUpdateListRequest $parameters)
    {
      return $this->makeSoapCall('asyncUpdateList', array($parameters));
    }

    /**
     * @param AsyncUpsertListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncUpsertList(Service\AsyncUpsertListRequest $parameters)
    {
      return $this->makeSoapCall('asyncUpsertList', array($parameters));
    }

    /**
     * @param AsyncDeleteListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncDeleteList(Service\AsyncDeleteListRequest $parameters)
    {
      return $this->makeSoapCall('asyncDeleteList', array($parameters));
    }

    /**
     * @param AsyncGetListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncGetList(Service\AsyncGetListRequest $parameters)
    {
      return $this->makeSoapCall('asyncGetList', array($parameters));
    }

    /**
     * @param AsyncInitializeListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncInitializeList(Service\AsyncInitializeListRequest $parameters)
    {
      return $this->makeSoapCall('asyncInitializeList', array($parameters));
    }

    /**
     * @param AsyncSearchRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncSearch(Service\AsyncSearchRequest $parameters)
    {
      return $this->makeSoapCall('asyncSearch', array($parameters));
    }

    /**
     * @param GetAsyncResultRequest $parameters
     * @return GetAsyncResultResponse
     */
    public function getAsyncResult(Service\GetAsyncResultRequest $parameters)
    {
      return $this->makeSoapCall('getAsyncResult', array($parameters));
    }

    /**
     * @param CheckAsyncStatusRequest $parameters
     * @return AsyncStatusResponse
     */
    public function checkAsyncStatus(Service\CheckAsyncStatusRequest $parameters)
    {
      return $this->makeSoapCall('checkAsyncStatus', array($parameters));
    }

    /**
     * @param GetDeletedRequest $parameters
     * @return GetDeletedResponse
     */
    public function getDeleted(Service\GetDeletedRequest $parameters)
    {
      return $this->makeSoapCall('getDeleted', array($parameters));
    }

    /**
     * @param GetAccountGovernanceInfoRequest $parameters
     * @return GetAccountGovernanceInfoResponse
     */
    public function getAccountGovernanceInfo(Service\GetAccountGovernanceInfoRequest $parameters)
    {
      return $this->makeSoapCall('getAccountGovernanceInfo', array($parameters));
    }

    /**
     * @param GetIntegrationGovernanceInfoRequest $parameters
     * @return GetIntegrationGovernanceInfoResponse
     */
    public function getIntegrationGovernanceInfo(Service\GetIntegrationGovernanceInfoRequest $parameters)
    {
      return $this->makeSoapCall('getIntegrationGovernanceInfo', array($parameters));
    }
}
