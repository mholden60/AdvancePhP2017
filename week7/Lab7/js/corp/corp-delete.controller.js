(function () {

    'use strict';
    angular
            .module('app.corp')
            .controller('CorpsDeleteController', CorpsDeleteController);

    CorpsDeleteController.$inject = ['CorpsService', '$routeParams'];

    function CorpsDeleteController(CorpsService, $routeParams) {
        var vm = this;

        var id = $routeParams.id;
        vm.message = '';
                
                activate();

        ////////////

        function activate() {
            CorpsService.deleteCorps(id).then(function (response) {
                vm.message = 'Corps deleted';
            }, function (error) {
                vm.message = 'Corps was not deleted';
            });
        }

    }

})();
