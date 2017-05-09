(function(){
    //the PhoneDetailController is used to be the glue between the index and the phone-detail.template.html. 
    'use strict';
    angular
            .module('app')
            .controller('PhoneDetailController', PhoneDetailController);
    
    PhoneDetailController.$inject = ['$routeParams', 'PhonesService'];
    
    function PhoneDetailController($routeParams, PhonesService){
        var vm = this;
//        "this" is the object that "owns" the current code.
        vm.phone = {};
        var id = $routeParams.phoneId;
        //service allows you to retrieve the current set of route parameters.
        activate();
        
        //////////////////
        
        function activate(){
            PhonesService.findPhone(id).then(function(response){
                vm.phone = response;
                
            });
        }
    }
})();
