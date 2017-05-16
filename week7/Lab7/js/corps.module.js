(function () {

    'use strict';
    /*
     * Lets create a new feature module and add it to the main module
     */
    angular.module('app.corps', []);

    angular.module('app').requires.push('app.corps');

})();


