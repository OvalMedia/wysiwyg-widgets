<?php
declare(strict_types=1);

namespace OM\WysiwygWidgets\Plugin;

use Magento\Ui\Component\Wysiwyg\ConfigInterface;
use Magento\Framework\DataObject;

class Config
{
    /**
     * @param \Magento\Ui\Component\Wysiwyg\ConfigInterface $configInterface
     * @param $data
     * @return array|array[]
     */
    public function beforeGetConfig(ConfigInterface $configInterface, $data = []): array
    {
        $data['add_variables'] = true;
        $data['add_widgets'] = true;
        return [$data];
    }

    /**
     * @param \Magento\Ui\Component\Wysiwyg\ConfigInterface $configInterface
     * @param \Magento\Framework\DataObject $result
     * @return \Magento\Framework\DataObject
     */
    public function afterGetConfig(ConfigInterface $configInterface, DataObject $result): DataObject
    {
        $tinymce = $result->getData('tinymce');
        $tinymce['toolbar'] = 'magentovariable magentowidget |' . $tinymce['toolbar'] . ' fullscreen';
        $tinymce['plugins'] = 'magentovariable magentowidget |' . $tinymce['plugins'] . ' fullscreen';
        $result->setData('tinymce', $tinymce);
        return $result;
    }
}