// ABConnect, MIT
// https://gist.github.com/raphaelbastide/157aaee7da6d2b761b2a

var DEGREES = 180 / Math.PI;

function createDiv(classname) {
  var div = document.createElement('div');
  div.className = classname;
  document.body.appendChild(div);
  return div;
}

function elementVect(elt, corner="bl") {
  var rect = elt.getBoundingClientRect();
  if (corner === "bl") {
    return [Math.round(rect.left) , Math.round(rect.bottom) ];
  }else if (corner === "tr") {
    return [Math.round(rect.right) , Math.round(rect.top) ];
  }else if (corner === "tl") {
    return [Math.round(rect.left) , Math.round(rect.top) + 18 ];
  }else if (corner === "br") {
    return [Math.round(rect.right) , Math.round(rect.bottom) ];
  }
}

function renderLine(line, vec1, vec2) {
  // lineVec = vec1 - vec2
  var lineVec = [vec1[0] - vec2[0], vec1[1] - vec2[1]];
  // angle = invert lineVec, then get its angle in degrees
  var angle = Math.atan2(lineVec[1] * -1, lineVec[0] * -1) * DEGREES;
  // length of lineVec
  var length = Math.sqrt(lineVec[0] * lineVec[0] + lineVec[1] * lineVec[1]);
  line.style.top = vec1[1] + 'px';
  line.style.left = vec1[0] + 'px';
  line.style.width = length + 'px';
  line.style.transform = 'rotate(' + angle + 'deg)';
}

var line = createDiv('line');

var aVec = null;
var bVec = null;

function draw(cla, clb, update) {
  var a = cla;
  var b = clb;
  // Remove the requestAnimationFrame if you want the line to be always aligned (e.g. even when scrolling)
  requestAnimationFrame(function() {
    if (update) {
      if (a === null || b === null ){
        console.log('something missing');
        aVec = [0,0];
        bVec = [0,0];
      }else{
        aVec = elementVect(a,'tl');
        bVec = elementVect(b,'bl');
      }
    }
    renderLine(line, aVec, bVec);
  });
}

function abconnect(cla, clb){
  draw(cla, clb, true);
}
