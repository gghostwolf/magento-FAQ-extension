<?php
class IssohSystems_Faq_Model_Resource_Category_Data_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('faq/category_data');
    }
}