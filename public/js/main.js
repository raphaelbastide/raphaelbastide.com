function doPlumb(from, to){
  jsPlumb.ready(function () {

    $(window).scroll(function () {
      mainLinks.repaintEverything();
    });

    var mainLinks = jsPlumb.getInstance({
      PaintStyle:{ 
        lineWidth:1, 
        strokeStyle:"#ccc"
      },
      Connector:[ "Straight", { stub: 0 } ],
      Endpoint:"Blank"
    });

    mainLinks.connect({
      source: from, 
      target: to,
      anchor:["LeftMiddle", "TopLeft"]
    });

    $('.cycle-slideshow').on('cycle-after', function() {
      mainLinks.reset();
    });
    
  });
}


$( '.cycle-slideshow' ).on( 'cycle-after', function() {
  var currImgId = $('.cycle-slide.cycle-slide-active').attr('id'),
      // Regex pattern to escape "-"+"digit" as in "branch-2"" : /[-]\d+\b/g
      currTxtId = currImgId.replace(/[-]\d+\b/g,'').replace('-img',''),
      cleanImgId = currImgId.replace(/[-]\d+\b/g,''),
      currImg = "$('."+currImgId+"'')",
      currTxt = "$('#"+currTxtId+"'')";

  if(currImgId.length > 0 && currTxtId.length > 0){
    console.log(currTxtId, cleanImgId)
    setTimeout(function(){ doPlumb(currTxtId,$(".images"));},100);

    
  }
});
