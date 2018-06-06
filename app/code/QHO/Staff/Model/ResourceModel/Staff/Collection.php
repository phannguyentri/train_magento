<?php
namespace QHO\Staff\Model\ResourceModel\Staff;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'QHO\Staff\Model\Staff',
            'QHO\Staff\Model\ResourceModel\Staff'
        );
    }
}