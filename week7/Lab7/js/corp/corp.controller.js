(function () {
    
    'use strict';
    angular
        .module('app.corp')
        .controller('CorpController', CorpController);

    CorpController.$inject = ['CorpService'];
    /*
     * Simple controller to get information for the view.
     */
    function CorpController(CorpService) {
        var vm = this;

        vm.corps = [];
        vm.deleteCorp = deleteCorp;
        vm.message = '';

        activate();

        ////////////

        function activate() {
            CorpService.getAllCorps().then(function (response) {
                vm.corps = response;
            });
        }
        
        function deleteCorp(id) {
             CorpService.deleteCorp(id).then(function (response) {
                vm.message = 'Corps Deleted';
                activate();
            }, function(error) {
                vm.message = 'Corps was NOT Deleted';
            });
        }

    }
    
})();