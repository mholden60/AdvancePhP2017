(function() {
    
    'use strict';
    angular
        .module('app.corps')
        .config(config);
  
    config.$inject = ['$routeProvider'];

    /*
     * We set out custom feature with a starting page and pages
     * that go from there.  then the URL matches the route, we update
     * that view and process the controller
     */
    function config($routeProvider) {
       $routeProvider.
            when('/corps', {
                templateUrl: 'js/corps.template.html',
                controller: 'CorpsController',
                controllerAs: 'vm'
            }).
            when('/corps/:id', {
                templateUrl: 'js/corps-detail.template.html',
                controller: 'CorpsDetailController',
                controllerAs: 'vm'
            }).
            when('/address/delete/:id', {
                templateUrl:'js/corps-delete.template.html',
                controller:'CorpsDeleteController',
                controllerAs:'vm'
            });
    }

})();