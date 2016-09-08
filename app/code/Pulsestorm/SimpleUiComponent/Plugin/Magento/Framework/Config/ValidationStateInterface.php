<?php
namespace Pulsestorm\SimpleUiComponent\Plugin\Magento\Framework\Config;
class ValidationStateInterface
{
    public function afterIsValidationRequired($subject, $result)
    {
        return false;
    }
}
