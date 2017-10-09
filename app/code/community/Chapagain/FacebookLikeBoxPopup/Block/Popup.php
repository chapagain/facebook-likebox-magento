<?php 
 
class Chapagain_FacebookLikeBoxPopup_Block_Popup extends Mage_Core_Block_Template
{			
	public function getIsHomePage() 
	{
		$routeName = Mage::app()->getRequest()->getRouteName();
		$identifier = Mage::getSingleton('cms/page')->getIdentifier();	  

		if($routeName == 'cms' && $identifier == 'home') {
			return true;
		} else {
			return false;
		}
	}	
	
}

?>
