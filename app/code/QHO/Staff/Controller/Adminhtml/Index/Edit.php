<?php 
namespace QHO\Staff\Controller\Adminhtml\Index;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use QHO\Staff\Model\StaffFactory;

class Edit extends \Magento\Backend\App\Action{
	protected $_resultPageFactory;
	protected $_staffFactory;


	public function __construct(Context $context, 
								PageFactory $pageFactory,
								StaffFactory $staffFactory){
		parent::__construct($context);
		$this->_resultPageFactory = $pageFactory;
		$this->_staffFactory = $staffFactory;
	}

	public function execute(){

		$staffId	= $this->getRequest()->getParam('id');
		$model 		= $this->_staffFactory->create();

		if ($staffId) {
			$model->load($staffId);
			$title 	= "Edit Staff";
		}else{
			$title 	= "Add Staff";
		}


		$resultpage = $this->_resultPageFactory->create();
		$resultpage->setActiveMenu("QHO_Staff::staff");
		$resultpage->getConfig()->getTitle()->prepend(__($title));

		return $resultpage;
	}
}

