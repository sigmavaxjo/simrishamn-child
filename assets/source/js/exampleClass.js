Simrishamn = Simrishamn || {};
Simrishamn.ExampleNamespace = Simrishamn.Liquid || {};

Simrishamn.ExampleNamespace.ExampleClass = (function ($) {

	var classVariable = false;

    /**
     * Constructor
     * Should be named as the class itself
     */
	function ExampleClass() {

    }

    /**
     * Method
     */
    ExampleClass.prototype.exampleMethod = function () {

    }

	return new ExampleClass();

})(jQuery);
