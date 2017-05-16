(function () {

    'use strict';
    angular
            .module('app.corps')
            .controller('CorpsDeleteController', CorpsDeleteController);

    CorpsDeleteController.$inject = ['CorpsService', '$routeParams'];

    function CorpsDeleteController(CorpsService, $routeParams) {
        var vm = this;

        var Id = $routeParams.Id;
        vm.message = '';
                
                activate();

        ////////////

        function activate() {
            CorpsService.deleteCorps(Id).then(function (response) {
                vm.message = 'Corps deleted';
            }, function (error) {
                vm.message = 'Corps was not deleted';
            });
        }

    }

})();
