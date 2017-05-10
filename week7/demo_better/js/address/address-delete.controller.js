(function () {
    
    'use strict';
    angular
        .module('app.address')
        .controller('AddressDeleteController', AddressDeleteController);

    AddressDeleteController.$inject = ['AddressService','$routeParams'];
    /*
     * Simple controller to get information for the view.
     */
    function AddressDeleteController(AddressService, $routeParams) {
        var vm = this;

        var addressId = $routeParams.addressId;
vm.message = '',
        activate();

        ////////////

        function activate() {
            AddressService.deleteAddress(addressId).then(function (response) {
                vm.message = 'address delete';
            }, function(error){
                vm.message = 'address was not delete';
            });
        }

    }
    
})();