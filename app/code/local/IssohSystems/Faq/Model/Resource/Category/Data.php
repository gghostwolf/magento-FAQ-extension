<?php

class IssohSystems_Faq_Model_Resource_Category_Data extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('faq/category_data','category_data_id');
    }
}