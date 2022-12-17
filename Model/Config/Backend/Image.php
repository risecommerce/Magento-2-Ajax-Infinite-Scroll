<?php
/**
 * Class Image
 *
 * PHP version 7
 *
 * @category Risecommerce
 * @package  Risecommerce_AjaxInfiniteScroll
 * @author   Risecommerce <magento@risecommerce.com>
 * @license  https://www.risecommerce.com  Open Software License (OSL 3.0)
 * @link     https://www.risecommerce.com
 */
namespace Risecommerce\AjaxInfiniteScroll\Model\Config\Backend;

class Image extends \Magento\Config\Model\Config\Backend\Image
{
    /**
     * UPLOAD_DIR
     */
    const UPLOAD_DIR = 'risecommerce/ajax_infinite_scroll'; // Folder save image

    /**
     * @return string
     */
    protected function _getUploadDir()
    {
        return $this->_mediaDirectory->getAbsolutePath($this->_appendScopeInfo(self::UPLOAD_DIR));
    }

    /**
     * @return bool
     */
    protected function _addWhetherScopeInfo()
    {
        return true;
    }

    /**
     * @return array|string[]
     */
    protected function _getAllowedExtensions()
    {
        return ['jpg', 'jpeg', 'gif', 'png', 'svg'];
    }
}
