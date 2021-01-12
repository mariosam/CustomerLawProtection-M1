<?php
/**
 * Class Position
 * 
 * @author      MarioSAM <eu@mariosam.com.br>
 * @version     1.0.0
 * @date        2021/01
 * @copyright   Blog do Mario SAM
 * 
 * Give the new options value to config the system module.
 */
class MarioSAM_CustomerLawProtection_Model_Config_Source_Position
{
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value'=>'bottom', 'label'=>__('Bottom Line')),
            array('value'=>'top', 'label'=>__('Header Line'))
        );
    }
}
