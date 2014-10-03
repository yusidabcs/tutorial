require.config({
    baseUrl: 'lib',
    paths: {
        "jquery"    	: 'jquery',
        "underscore"    : 'underscore',

        //modules
        "example"		: 'modules/example' 
    }
});

require([
  'example'
], function(ExampleModule)
{
   //some code here 
   ExampleModule.showHello('John');
});