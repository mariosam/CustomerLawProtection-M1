<?php
/**
 * Class CustomerLawProtectionBlock
 * 
 * @author      MarioSAM <eu@mariosam.com.br>
 * @version     1.0.0
 * @date        2021/01
 * @copyright   Blog do Mario SAM
 * 
 * This class collect the data to show them in frontend.
 */

class MarioSAM_CustomerLawProtection_Block_CustomerLawProtectionBlock extends Mage_Core_Block_Template
{
    /**
     * CustomerLawProtectionBlock constructor.
     *
     */
    protected function _construct()
    {
        parent::_construct();
    }

    /**
     * Check if this module is active or not.
     * 
     * @return boolean
     */
    public function getEnabled()
    {
        return Mage::getStoreConfig('customerlawprotection/frontend_message/enabled');
    }
    
    /**
     * Get cookie session and send to frontend.
     * 
     * @return cookie session
     */
    public function getCookieManager()
    {
        return Mage::getModel('core/cookie')->get('popup-policy');
    }

    /**
     * Get position configuration of module and send to frontend.
     * 
     * @return text
     */
    public function getPosition()
    {
        return Mage::getStoreConfig('customerlawprotection/frontend_message/position');
    }

    /**
     * Get message configuration of module and send to frontend.
     * 
     * @return text
     */
    public function getMessage()
    {
        return Mage::getStoreConfig('customerlawprotection/frontend_message/message');
    }

    /**
     * Get cookietime configuration of module and send to frontend.
     * 
     * @return int
     */
    public function getCookieTime()
    {
        return Mage::getStoreConfig('customerlawprotection/frontend_message/cookietime');
    }
    
    /**
     * Get possible CSS code customized.
     * 
     * @return int
     */
    public function getCssCustom()
    {
        return Mage::getStoreConfig('customerlawprotection/frontend_message/css');
    }
    
    /**
     * Get possible JS code customized.
     * 
     * @return int
     */
    public function getJsCustom()
    {
        return Mage::getStoreConfig('customerlawprotection/frontend_message/js');
    }
    
}