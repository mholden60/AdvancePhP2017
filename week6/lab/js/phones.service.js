(function () {
    'use strict';
    angular
            .module('app')
            .factory('PhonesService', PhonesService);
    PhonesService.$inject = ['$http', 'REQUEST'];

    function PhonesService($http, REQUEST) {
        var url = REQUEST.Phones;
        var service = {
            'getPhones': getPhones,
            'findPhone': findPhone
        };
        return service;

        //////////////
        function getPhones() {
            return $http.get(url)
                    .then(getPhonesComplete, getPhonesFailed);
            function getPhonesComplete(response) {
                return response.data;
            }
            function getPhonesFailed(error) {
                return[];
            }
        }
        function findPhone(id) {
            return getPhones()
                    .then(function (data) {
                        return findPhoneComplete(data);
                //will call the getPhones function and when called it will run the findPhone function and calls upon the findPhoneComplete
                        ;
                    });
            function findPhoneComplete(data) {
                //when called it will display the results for each result if it exsist or make a copy of it.
                var results = {};

                angular.forEach(data, function (value, key) {
                    if (!results.length) {
                        if (value.hasOwnProperty('id') && value.id === id) {
                            results = angular.copy(value);
                            //It will create a copy of the value if no id is supplied
                        }
                    }
                }, results);
                return results;
                //will return the results of the fund
            }
        }
    }
})();