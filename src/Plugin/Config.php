<?php
declare(strict_types=1);

namespace OM\WysiwygWidgets\Plugin;

class Config
{
    public function afterGetConfig(
        \Magento\Ui\Component\Wysiwyg\ConfigInterface $configInterface,
        \Magento\Framework\DataObject $result
    ): \Magento\Framework\DataObject
    {
        $settings = $result->getData('settings');
        echo '<pre>';print_r($settings);exit;
    }
}