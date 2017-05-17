(function () {

    'use strict';
    angular
            .module('app.corp')
            .factory('CorpService', CorpService);

    CorpService.$inject = ['$http', 'REQUEST'];

    /*
     * We will do as much logic here as we can.
     */
    function CorpService($http, REQUEST) {

        var url = REQUEST.Corp;

        var service = {
            'getAllCorps': getAllCorps,
            'getCorp': getCorp,
            'postCorp': postCorp,
            'deleteCorp': deleteCorp,
            'putCorp': putCorp

        };
        return service;

        function getAllCorps() {
            return $http.get(url)
                    .then(handleSuccess, handleFailed);

            function handleSuccess(response) {
                return response.data.data;
            }

            function handleFailed(error) {
                return [];
            }
        }
        function getCorp(id) {
            var _url = url + '/' + id;

            return $http.get(_url)
                    .then(handleSuccess, handleFailed);

            function handleSuccess(response) {
                return response.data.data;
            }

            function handleFailed(error) {
                return {};
            }
        }
        function postCorp(corp, incorp_dt, email, owner, phone, location) {
            var model = {};
            model.corp = corp;
            model.incorp_dt = incorp_dt;
            model.email = email;
            model.owner = owner;
            model.phone = phone;
            model.location = location;
            return $http.post(url, model);
        }
        function deleteCorp(id) {
            var _url = url + '/' + id;
            return $http.delete(_url);
        }
        function putCorp(id, corp, incorp_dt, email, owner, phone, location) {
            var _url = url + '/' + id;
            var model = {};
            model.corp = corp;
            model.incorp_dt = incorp_dt;
            model.email = email;
            model.owner = owner;
            model.phone = phone;
            model.location = location;
            return $http.post(url, model);
        }
    }
})();