define(['uiElement','ko'], function(Element, ko){
    //needs to return a js object extended from uiElement that
    //defines a template.  Magento and Knockout.js will use
    //the returned object as a view model constructor
    viewModelConstructor = Element.extend({
        defaults: {
            template: 'Pulsestorm_SimpleUiComponent/pulsestorm_simple_template'
        },
        message: ko.observable("Hello Knockout.js!")    
    });

    return viewModelConstructor;
});
