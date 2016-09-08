<?php
namespace Pulsestorm\SimpleUiComponent\Component;
class Simple extends \Magento\Ui\Component\AbstractComponent
{
    const NAME = 'pulsestorm_simple';
    public function getComponentName()
    {
        return static::NAME;
    }
    
    public function getEvenMoreData()
    {
        return 'Even More Data!';
    }

    public function getDataSourceData()
    {
        return ['data' => $this->getContext()->getDataProvider()->getData()];
    }
}