<?php

namespace SpauldingRidge\SuiteTalk\Service;

class SearchPreferences
{

    /**
     * @var boolean $bodyFieldsOnly
     */
    protected $bodyFieldsOnly = null;

    /**
     * @var boolean $returnSearchColumns
     */
    protected $returnSearchColumns = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getBodyFieldsOnly()
    {
      return $this->bodyFieldsOnly;
    }

    /**
     * @param boolean $bodyFieldsOnly
     * @return \SpauldingRidge\SuiteTalk\Service\SearchPreferences
     */
    public function setBodyFieldsOnly($bodyFieldsOnly)
    {
      $this->bodyFieldsOnly = $bodyFieldsOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnSearchColumns()
    {
      return $this->returnSearchColumns;
    }

    /**
     * @param boolean $returnSearchColumns
     * @return \SpauldingRidge\SuiteTalk\Service\SearchPreferences
     */
    public function setReturnSearchColumns($returnSearchColumns)
    {
      $this->returnSearchColumns = $returnSearchColumns;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return \SpauldingRidge\SuiteTalk\Service\SearchPreferences
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

}
