(function() {
    var app = angular.module('main', []);
    
    app.controller('FooterController', function() {
        var contentElement = angular.element(document.querySelector('#content-main'));
        var footerElement = angular.element(document.querySelector('#spotlight-footer'));
        var height = contentElement[0].offsetHeight;
        if (height >= 614) {
            footerElement.removeClass('sticky-footer');
        }
    });
    
    app.controller('Services', function() {
        this.srvs = services;
    });
    
    var images = [
      {
        full: 'mdi mdi-account'
      },
      {
        full: 'mdi mdi-briefcase'
      }
    ];
  var services = [
  { 
  	name: 'Normal',
  	description: 'This is the normal account. Can create events and these will increase in relevance according to the attendees who have.',
    image: images[0]
  },
  { 
  	name: 'Business', 
  	description: 'The events created with this account will be among the most relevant events in your area and with that you will get more attendees.',
    image: images[1]
  }
  ];
})();