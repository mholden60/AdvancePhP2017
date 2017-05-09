(function(){
 'use strict';
 angular
         .module('app')
         .controller('PhoneListController',PhoneListController);
 
 PhoneListController.$inject = ['PhonesService'];
 //The [] parameter in the module definition can be used to define dependent modules.

 function PhoneListController(PhonesService){
 var vm = this;
 
 vm.phones = [];
 activate();
 
 ///////////////
 
 function activate(){
     PhonesService.getPhones().then(function(response){
         vm.phones = response;
//         then() function is related to "Javascript promises" that are used in some libraries or frameworks like jQuery or AngularJS. The promise allows you to call a method called "then" that lets you specify the function(s) to use as the callbacks.
     });
 }
 }
})();
