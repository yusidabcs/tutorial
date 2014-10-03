define(['underscore', 'jquery'], function() {
  return {
    showHello: function(name){
          var temp = _.template("Hello <%= name %>");
         $("body").append(temp({name: name}));
    }

  };
});