<?php
namespace Pulsestorm\SimpleUiComponent\Plugin\Magento\Framework\App\Arguments;
class ValidationState
{
    //function beforeMETHOD($subject, $arg1, $arg2){}
    //function aroundMETHOD($subject, $procede, $arg1, $arg2){return $proceed($arg1, $arg2);}
    //function afterMETHOD($subject, $result){return $result;}
    
    public function afterIsValidationRequired($subject, $result)
    {
        return false;
    }    
}
