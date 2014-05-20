function doPlumb(from, to){
  jsPlumb.ready(function () {

    $(window).scroll(function () {
      mainLinks.repaintEverything();
    });

    var mainLinks = jsPlumb.getInstance({
      PaintStyle:{ 
        lineWidth:1, 
        strokeStyle:"red"
      },
      Connector:[ "Straight", { stub: 0 } ],
      Endpoint:"Blank"
    });

    mainLinks.connect({
      source: from, 
      target: to,
      anchor:["LeftMiddle", "TopLeft"]
    });

    $('.cycle-slideshow').on('cycle-next', function() {
      mainLinks.reset();
    });
    
  });
}


$( '.cycle-slideshow' ).on( 'cycle-next', function() {
  var currImgId = $('.cycle-slide.cycle-slide-active').attr('id'),
      currTxtId = currImgId.replace('-img',''),
      currImg = "$('."+currImgId+"'')",
      currTxt = "$('."+currTxtId+"'')";

  if(currImgId.length > 0 && currTxtId.length > 0){
    console.log(currTxtId, currImgId)
    setTimeout(function(){ doPlumb(currTxtId,$(".images"));},100);

  }
});
