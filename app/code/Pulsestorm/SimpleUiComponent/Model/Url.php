<?php
namespace Pulsestorm\SimpleUiComponent\Model;
class Url extends \Magento\Framework\Url
{
    public function getUrl($routePath = null, $routeParams = null)
    {
        return parent::getUrl($routePath, $routeParams);
    }    
}
