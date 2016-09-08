<?php
namespace Pulsestorm\SimpleUiComponent\Model;
class ValidationState extends \Magento\Framework\App\Arguments\ValidationState
{
    public function isValidationRequired()
    {     
        var_dump('Hey there, this extension disables XSD validation in ' . __FILE__ . 
        'because there\'s no other way to add a new component definition to ' . 
        'the merged definition.xml.  You probably don\'t want to use this in ' .
        'a real system.  EDUCATION ONLY, ETC.'  );   
        return false;
    }
}