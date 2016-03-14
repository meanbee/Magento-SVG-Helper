<?php

class Meanbee_Svg_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * @param $path
     *
     * @return bool|string
     */
    public function getSkinSvg($path)
    {
        $params = array('_type' => 'skin');

        $filepath = Mage::getDesign()->getFilename($path, $params);

        return $this->_getSvg($filepath);
    }

    /**
     * @param $path
     *
     * @return bool|string
     */
    public function getMediaSvg($path)
    {
        $path = Mage::getBaseDir('media') . DS . $path;

        return $this->_getSvg($path);
    }

    /**
     * @param $path
     *
     * @return bool|string
     */
    protected function _getSvg($path)
    {
        if (!file_exists($path)) {
            return false;
        }

        $html = file_get_contents($path);

        return $html;
    }
}
