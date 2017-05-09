(function(){
    'use strict';
    
    angular
            .module('app')
            .constant('REQUEST', {
                'Phones' : './data/phones.json'
        //"'Phones' : './data/phones.json'" calls the data from the data folder and displays it when called.
    });
})();


