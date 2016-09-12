# magento2-simple-ui-component

This repository holds sample code for the [Magento UI Component](http://alanstorm.com/category/magento-2#magento_2_ui) series.  

The code in `first-pass-unstable` disables Magento's XSD configuration in order to create a very basic UI Component that, similar to core components, renders an XHTML template.  

The code in `second-pass-stable` attempts to create a simple UI Component that loads RequireJS modules/Knockout.js view models and templates, **and** does so without violating the Magento provided XSD files. 

Code samples are currently tested against Magento 2.1.1.  Hopefully the techniques hold solid. See the [Simplest UI Component](http://alanstorm.com/magento_simplest_ui_component) article, other [others in the series](http://alanstorm.com/category/magento-2#magento_2_ui), for more context.