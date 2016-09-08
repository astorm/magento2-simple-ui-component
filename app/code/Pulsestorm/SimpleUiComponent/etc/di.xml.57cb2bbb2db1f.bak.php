<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:ObjectManager/etc/config.xsd">
    <type name="Magento\Framework\Config\Dom">
        <plugin name="pulsestorm_simpleuicomponent_magento_framework_config_dom" type="Pulsestorm\SimpleUiComponent\Plugin\Magento\Framework\Config\Dom"/>
    </type>
    <type name="Magento\Framework\View\Element\UiComponent\Config\DomMerger">
        <plugin name="pulsestorm_simpleuicomponent_magento_framework_view_element_uicomponent_config_dommerger" type="Pulsestorm\SimpleUiComponent\Plugin\Magento\Framework\View\Element\UiComponent\Config\DomMerger"/>
    </type>
<!-- 
    <type name="Magento\Framework\Config\ValidationStateInterface">
        <plugin name="pulsestorm_simpleuicomponent_magento_framework_config_validationstateinterface" type="Pulsestorm\SimpleUiComponent\Plugin\Magento\Framework\Config\ValidationStateInterface"/>
    </type>
 -->
</config>
