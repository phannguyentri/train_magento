<?php 
namespace QHO\Staff\Block\Adminhtml\Staff\Edit;
use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;
use Magento\Framework\Data\FormFactory;
use QHO\Staff\Model\Config\Status;

class Form extends Generic{
	protected $_staffStatus;

	public function __construct(Context $context,
								Registry $registry,
								FormFactory $formFactory,
								Status $status,
								array $data
							    ){
		$this->_staffStatus = $status;
		parent::__construct($context, $registry, $formFactory, $data);
	}

	protected function _prepareForm(){
		$form = $this->_formFactory->create(
			[
				"data" => [
					"id"		=> "edit_form",
					"action"	=> "staff/index/edit",
					"method"	=> "post",
					"enctype"	=> "multipart/form-data"
				]
			]
		);

		$fieldset = $form->addFieldset(
			"base_fieldset",
			["legend" => __("General Information"), "class" => "fieldset_wide"]
		);

		$fieldset->addField(
			"name",
			"text",
			[
				"name"		=> "name",
				"label"		=> __("Full Name"),
				"required"	=> true,
			]
		);
		$fieldset->addField(
			"email",
			"text",
			[
				"name"		=> "email",
				"label"		=> __("Email"),
				"required"	=> true,
			]
		);
		$fieldset->addField(
			"phone",
			"text",
			[
				"name"		=> "phone",
				"label"		=> __("Phone"),
				"required"	=> true,
			]
		);
		$fieldset->addField(
			"position",
			"text",
			[
				"name"		=> "position",
				"label"		=> __("Position"),
				"required"	=> true,
			]
		);
		$fieldset->addField(
			"status",
			"select",
			[
				"name"		=> "Status",
				"label"		=> __("Status"),
				"required"	=> true,
				"options"	=> $this->_staffStatus->toOptionArray()
			]
		);
		$fieldset->addField(
			"avatar",
			"image",
			[
				"name"		=> "avatar",
				"label"		=> __("Avatar"),
				"required"	=> true,
			]
		);

		$form->setHtmlIdPrefix("staff_main_");
		$form->setUseContainer(true);
		$this->setForm($form);
		return parent::_prepareForm();
	}
}