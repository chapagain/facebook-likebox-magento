<?php

class Chapagain_FacebookLikeBoxPopup_Helper_Data extends Mage_Core_Helper_Abstract
{
	const CONFIG_FBPOPUP_IS_ENABLE = 'facebooklikeboxpopup/general/is_enable';
	const CONFIG_FBPOPUP_FB_LINK = 'facebooklikeboxpopup/general/fb_link';
	const CONFIG_FBPOPUP_FB_NAME = 'facebooklikeboxpopup/general/fb_name';
	const CONFIG_FBPOPUP_POPUP_TEXT = 'facebooklikeboxpopup/general/popup_text';
	const CONFIG_FBPOPUP_POPUP_WIDTH = 'facebooklikeboxpopup/general/popup_width';
	const CONFIG_FBPOPUP_POPUP_HEIGHT = 'facebooklikeboxpopup/general/popup_height';
	const CONFIG_FBPOPUP_SHOW_STREAM = 'facebooklikeboxpopup/general/show_stream';
	const CONFIG_FBPOPUP_SHOW_FACES = 'facebooklikeboxpopup/general/show_faces';
	const CONFIG_FBPOPUP_SHOW_HEADER = 'facebooklikeboxpopup/general/show_header';
	const CONFIG_FBPOPUP_HIDE_COVER_PHOTO = 'facebooklikeboxpopup/general/hide_cover_photo';
	const CONFIG_FBPOPUP_ADAPT_CONTAINER_WIDTH = 'facebooklikeboxpopup/general/adapt_container_width';
	
	const CONFIG_FBPOPUP_IS_ENABLE_SIDEBAR = 'facebooklikeboxpopup/sidebar/is_enable';
	const CONFIG_FBPOPUP_SHOW_LEFT_SIDEBAR = 'facebooklikeboxpopup/sidebar/show_in_left_sidebar';
	const CONFIG_FBPOPUP_SHOW_RIGHT_SIDEBAR = 'facebooklikeboxpopup/sidebar/show_in_right_sidebar';
	const CONFIG_FBPOPUP_FB_LINK_SIDEBAR = 'facebooklikeboxpopup/sidebar/fb_link';
	const CONFIG_FBPOPUP_FB_NAME_SIDEBAR = 'facebooklikeboxpopup/sidebar/fb_name';
	const CONFIG_FBPOPUP_POPUP_TEXT_SIDEBAR = 'facebooklikeboxpopup/sidebar/popup_text';
	const CONFIG_FBPOPUP_POPUP_WIDTH_SIDEBAR = 'facebooklikeboxpopup/sidebar/popup_width';
	const CONFIG_FBPOPUP_POPUP_HEIGHT_SIDEBAR = 'facebooklikeboxpopup/sidebar/popup_height';
	const CONFIG_FBPOPUP_SHOW_STREAM_SIDEBAR = 'facebooklikeboxpopup/sidebar/show_stream';
	const CONFIG_FBPOPUP_SHOW_FACES_SIDEBAR = 'facebooklikeboxpopup/sidebar/show_faces';
	const CONFIG_FBPOPUP_SHOW_HEADER_SIDEBAR = 'facebooklikeboxpopup/sidebar/show_header';
	const CONFIG_FBPOPUP_HIDE_COVER_PHOTO_SIDEBAR = 'facebooklikeboxpopup/sidebar/hide_cover_photo';
	const CONFIG_FBPOPUP_ADAPT_CONTAINER_WIDTH_SIDEBAR = 'facebooklikeboxpopup/sidebar/adapt_container_width';
	
	/**************************************************************
     * POPUP SETTINGS
     **************************************************************/ 
    public function getIsEnable()
    {
        return Mage::getStoreConfig(self::CONFIG_FBPOPUP_IS_ENABLE);        
    }
    
    public function getFbLink()
    {		
        return Mage::getStoreConfig(self::CONFIG_FBPOPUP_FB_LINK);
    }
    
    public function getFbName()
    {		
        return Mage::getStoreConfig(self::CONFIG_FBPOPUP_FB_NAME);
    }
    
    public function getPopupText()
    {
        return Mage::getStoreConfig(self::CONFIG_FBPOPUP_POPUP_TEXT);        
    }
    
    public function getPopupWidth()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_POPUP_WIDTH);
        return $value > 0 ? $value : 400;
    }
    
    public function getPopupHeight()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_POPUP_HEIGHT);
        return $value > 0 ? $value : 220;
    }
    
    public function getShowStream()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_SHOW_STREAM);
        return $value == 0 ? 'false' : 'true';
    }
    
    public function getShowHeader()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_SHOW_HEADER);
        return $value == 0 ? 'false' : 'true';
    }
    
    public function getShowFaces()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_SHOW_FACES);
        return $value == 0 ? 'false' : 'true';       
    }
    
    public function getHideCoverPhoto()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_HIDE_COVER_PHOTO);
        return $value == 0 ? 'false' : 'true';       
    }
    
    public function getAdaptContainerWidth()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_ADAPT_CONTAINER_WIDTH);
        return $value == 0 ? 'false' : 'true';       
    }	
    
    /**************************************************************
     * SIDEBAR SETTINGS
     **************************************************************/ 
     
    public function getIsEnableSidebar()
    {
        return Mage::getStoreConfig(self::CONFIG_FBPOPUP_IS_ENABLE_SIDEBAR);
    }
    
    public function getShowInLeftSidebar()
    {
        return Mage::getStoreConfig(self::CONFIG_FBPOPUP_SHOW_LEFT_SIDEBAR);
    }
    
    public function getShowInRightSidebar()
    {
        return Mage::getStoreConfig(self::CONFIG_FBPOPUP_SHOW_RIGHT_SIDEBAR);
    }
    
    public function getFbLinkSidebar()
    {		
        return Mage::getStoreConfig(self::CONFIG_FBPOPUP_FB_LINK_SIDEBAR);
    }
    
    public function getFbNameSidebar()
    {		
        return Mage::getStoreConfig(self::CONFIG_FBPOPUP_FB_NAME_SIDEBAR);
    }
    
    public function getPopupTextSidebar()
    {
        return Mage::getStoreConfig(self::CONFIG_FBPOPUP_POPUP_TEXT_SIDEBAR);        
    }
    
    public function getPopupWidthSidebar()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_POPUP_WIDTH_SIDEBAR);
        return $value > 0 ? $value : 400;
    }
    
    public function getPopupHeightSidebar()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_POPUP_HEIGHT_SIDEBAR);
        return $value > 0 ? $value : 220;
    }
    
    public function getShowStreamSidebar()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_SHOW_STREAM_SIDEBAR);
        return $value == 0 ? 'false' : 'true';
    }
    
    public function getShowHeaderSidebar()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_SHOW_HEADER_SIDEBAR);
        return $value == 0 ? 'false' : 'true';
    }
    
    public function getShowFacesSidebar()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_SHOW_FACES_SIDEBAR);
        return $value == 0 ? 'false' : 'true';       
    }
    
    public function getHideCoverPhotoSidebar()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_HIDE_COVER_PHOTO_SIDEBAR);
        return $value == 0 ? 'false' : 'true';       
    }
    
    public function getAdaptContainerWidthSidebar()
    {
        $value = Mage::getStoreConfig(self::CONFIG_FBPOPUP_ADAPT_CONTAINER_WIDTH_SIDEBAR);
        return $value == 0 ? 'false' : 'true';       
    } 
}

?>
