jsPlumb.ready(function () {

  $(window).scroll(function () {
    mainLinks.repaintEverything();
  });
  
  var mainLinks = jsPlumb.getInstance({
    PaintStyle:{ 
      lineWidth:1, 
      strokeStyle:"#eee"
    },
    Connector:[ "Straight", { stub: 0 } ],
    Endpoint:"Blank"
  });

  mainLinks.connect({
    source:$('#usemodify'), 
    target:$('.images'),
    anchor:["BottomLeft", "Bottom"]
  });


});
