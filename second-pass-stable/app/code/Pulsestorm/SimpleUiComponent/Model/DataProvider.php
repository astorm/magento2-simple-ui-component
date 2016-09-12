<?php
namespace Pulsestorm\SimpleUiComponent\Model;
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    public function getData()
    {
        return [['foo'=>'baz']];
    }
}