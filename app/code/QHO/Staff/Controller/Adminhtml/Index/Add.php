<?php 
namespace QHO\Staff\Controller\Adminhtml\Index;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Add extends \Magento\Backend\App\Action{
	protected $_resultPageFactory;

	public function __construct(Context $context, PageFactory $pageFactory){
		parent::__construct($context);
		$this->_resultPageFactory = $pageFactory;
	}

	public function execute(){
		return $this->_forward('edit');
	}
}

