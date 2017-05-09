(function () {
    //"use strict" defines that JavaScript code should be executed in "strict mode".
    //With strict mode, you can not, for example, use undeclared variables
    'use strict';

    angular
            .module('app', ['ngRoute'])
            .config(config);
    //The config method will be performed when the application is loading
    config.$inject = ['$routeProvider'];
    //The $routeProvider is used to configure different routes in the application.
    function config($routeProvider) {
        $routeProvider.
                when('/', {
                    templateUrl: 'js/phone-list.template.html',
                    //templateUrl can also be a function which returns the URL of an HTML template to be loaded and used for the directive.
                    controller: 'PhoneListController',
                    controllerAs: 'vm'
                            //controllerAs is to specify the name of the controller as an alias
                }).
                when('/phones/:phoneId', {
                    templateUrl: 'js/phone-detail.template.html',
                    controller: 'PhoneDetailController',
                    controllerAs: 'vm'
                }).
                otherwise({
                    redirectTo: '/'
                });
//                When the id is present it will redirect to the phone-detail.template.html page and use the controller, else it will stay on the index.html page

    }
})();