<?php
namespace Pulsestorm\SimpleUiComponent\Plugin\Magento\Framework\Config;
class Dom
{
    //function beforeMETHOD($subject, $arg1, $arg2){}
    //function aroundMETHOD($subject, $procede, $arg1, $arg2){return $proceed($arg1, $arg2);}
    //function afterMETHOD($subject, $result){return $result;}
    
    public function afterValidateDomDocument($subject, $result)
    {
        var_dump(__METHOD__);
        exit;
    }
}
