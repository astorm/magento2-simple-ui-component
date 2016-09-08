<?php
namespace Pulsestorm\SimpleUiComponent\Model;
class ValidationState extends \Magento\Framework\App\Arguments\ValidationState
{
    public function isValidationRequired()
    {        
        return false;
    }
}