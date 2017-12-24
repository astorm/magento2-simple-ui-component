# magento2-simple-ui-component

This repository holds sample code for the [Magento UI Component](http://alanstorm.com/category/magento-2#magento_2_ui) series.  

The code in `first-pass-unstable` disables Magento's XSD configuration in order to create a very basic UI Component that, similar to core components, renders an XHTML template.  

The code in `second-pass-stable` attempts to create a simple UI Component that loads RequireJS modules/Knockout.js view models and templates, **and** does so without violating the Magento provided XSD files. 

<s>Code samples are currently tested against Magento 2.1.1.  Hopefully the techniques hold solid. See the [Simplest UI Component](http://alanstorm.com/magento_simplest_ui_component) article, other [others in the series](http://alanstorm.com/category/magento-2#magento_2_ui), for more context</s>.

The release of Magento 2.2 broke the `first-pass-unstable` version of this module.  We were able to fix it by [<s>cargo culting</s>adding the following file](https://github.com/astorm/magento2-simple-ui-component/blob/master/first-pass-unstable/app/code/Pulsestorm/SimpleUiComponent/view/base/ui_component/etc/definition.map.xml).  We don't really know why this works, as `definition.map.xml` is one of those things Magento have added without really explaining what it's for. 