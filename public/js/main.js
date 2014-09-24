
function connect(){
  var currImgId = $('.cycle-slide.cycle-slide-active').attr('id'),
      // Regex pattern to escape "-"+"digit" as in "branch-2"" : /[-]\d+\b/g
      cleanImgId = currImgId.replace(/[-]\d+\b/g,''),
      currTxtId = currImgId.replace(/[-]\d+\b/g,'').replace('-img',''),
      // currTxt = "$('#"+currTxtId+"'')";
      // currImg = "$('."+cleanImgId+"'')",
        currTxt = document.getElementById(currTxtId);
        currImg = document.getElementById(cleanImgId);

  if(currImgId.length > 0 && currTxtId.length > 0){
    console.log(currTxt, currImg);
    abconnect(currTxt,currImg);
  }
}

window.addEventListener('scroll', function() {
  connect();
});

window.addEventListener('resize', function() {
  connect();
});

$( '.cycle-slideshow' ).on( 'cycle-after', function() {
  connect();
});

$(document.documentElement).keyup(function (event) {
  if (event.keyCode == 37){
    $('.cycle-slideshow').cycle('prev');
  }else if (event.keyCode == 39){
    $('.cycle-slideshow').cycle('next')
  }
});
