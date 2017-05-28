<?php
namespace Yireo\ExampleCmsBlock\Block;

use Magento\Framework\View\Element\AbstractBlock;

class Custom extends AbstractBlock
{
    const CONFIG_PATH = 'cms/yireo_examplecmsblock/block_name';

    protected function _toHtml()
    {
        $blockId = $this->_scopeConfig->getValue(self::CONFIG_PATH);

        if (empty($blockId)) {
            return __('Yireo_ExampleCmsBlock is not configured yet');
        }

        $layout = $this->getLayout();

        /** @var \Magento\Cms\Block\Block $cmsBlock */
        $cmsBlock = $layout->createBlock('Magento\Cms\Block\Block');

        return $cmsBlock->setBlockId($blockId)->toHtml();
    }
}
