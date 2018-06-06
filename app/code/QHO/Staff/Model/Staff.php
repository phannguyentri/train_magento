<?php 
namespace QHO\Staff\Model;
class Staff extends \Magento\Framework\Model\AbstractModel 
{
    protected function _construct()
    {
        $this->_init('QHO\Staff\Model\ResourceModel\Staff');
    }
}