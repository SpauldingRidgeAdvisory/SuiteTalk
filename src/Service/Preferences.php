<?php

namespace SpauldingRidge\SuiteTalk\Service;

class Preferences
{

    /**
     * @var boolean $warningAsError
     */
    protected $warningAsError = null;

    /**
     * @var boolean $disableMandatoryCustomFieldValidation
     */
    protected $disableMandatoryCustomFieldValidation = null;

    /**
     * @var boolean $disableSystemNotesForCustomFields
     */
    protected $disableSystemNotesForCustomFields = null;

    /**
     * @var boolean $ignoreReadOnlyFields
     */
    protected $ignoreReadOnlyFields = null;

    /**
     * @var boolean $runServerSuiteScriptAndTriggerWorkflows
     */
    protected $runServerSuiteScriptAndTriggerWorkflows = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getWarningAsError()
    {
      return $this->warningAsError;
    }

    /**
     * @param boolean $warningAsError
     * @return \SpauldingRidge\SuiteTalk\Service\Preferences
     */
    public function setWarningAsError($warningAsError)
    {
      $this->warningAsError = $warningAsError;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableMandatoryCustomFieldValidation()
    {
      return $this->disableMandatoryCustomFieldValidation;
    }

    /**
     * @param boolean $disableMandatoryCustomFieldValidation
     * @return \SpauldingRidge\SuiteTalk\Service\Preferences
     */
    public function setDisableMandatoryCustomFieldValidation($disableMandatoryCustomFieldValidation)
    {
      $this->disableMandatoryCustomFieldValidation = $disableMandatoryCustomFieldValidation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableSystemNotesForCustomFields()
    {
      return $this->disableSystemNotesForCustomFields;
    }

    /**
     * @param boolean $disableSystemNotesForCustomFields
     * @return \SpauldingRidge\SuiteTalk\Service\Preferences
     */
    public function setDisableSystemNotesForCustomFields($disableSystemNotesForCustomFields)
    {
      $this->disableSystemNotesForCustomFields = $disableSystemNotesForCustomFields;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnoreReadOnlyFields()
    {
      return $this->ignoreReadOnlyFields;
    }

    /**
     * @param boolean $ignoreReadOnlyFields
     * @return \SpauldingRidge\SuiteTalk\Service\Preferences
     */
    public function setIgnoreReadOnlyFields($ignoreReadOnlyFields)
    {
      $this->ignoreReadOnlyFields = $ignoreReadOnlyFields;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRunServerSuiteScriptAndTriggerWorkflows()
    {
      return $this->runServerSuiteScriptAndTriggerWorkflows;
    }

    /**
     * @param boolean $runServerSuiteScriptAndTriggerWorkflows
     * @return \SpauldingRidge\SuiteTalk\Service\Preferences
     */
    public function setRunServerSuiteScriptAndTriggerWorkflows($runServerSuiteScriptAndTriggerWorkflows)
    {
      $this->runServerSuiteScriptAndTriggerWorkflows = $runServerSuiteScriptAndTriggerWorkflows;
      return $this;
    }

}
