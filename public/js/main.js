(function() {

var CYCLE_INTERVAL = 7000;

var images = document.querySelector('.images');
var currImgId = null;

var cycleControls = cycle(images, CYCLE_INTERVAL, function(img) {
  currImgId = img.id;
  connect();
});

images.addEventListener('click', function() {
  cycleControls.next();
});
window.addEventListener('scroll', connect);
window.addEventListener('resize', connect);
document.addEventListener('keyup', function(event) {
  var direction = ({ 37: 'prev', 39: 'next' })[event.keyCode];
  if (direction) cycleControls[direction]();
});
document.addEventListener('DOMContentLoaded', function() {
  setTimeout(connect, 0);
});

var form = document.getElementById('newsletter-form');
var formBtn = document.querySelector('.formBtn');
var formInput =  document.querySelector('.email');

formBtn.addEventListener('click', function(){
  if (form.classList.toggle('opened')){
    formInput.focus()
  }
});

function connect() {
  if (currImgId === null) return;
  var cleanImgId = currImgId;
  // Regex pattern to escape "-"+"digit" as in "branch-2"" : /[-]\d+\b/g
  var currTxtId = currImgId.replace(/[-]\d+\b/g,'').replace('-img','');
  var currTxt = document.getElementById(currTxtId);
  var currImg = document.getElementById(cleanImgId);

  if (currImgId.length > 0 && currTxtId.length > 0){
    abconnect(currTxt, currImg);
  }
}

function cycle(container, delay, cb) {
  var imgs = [].slice.call(container.querySelectorAll('img'));
  var order = Object.keys(imgs);
  var activeIndex = 0;

  var timer = null;
  function activeImg() {
    return imgs[order[activeIndex]];
  }
  function getIndex(direction) {
    var newIndex = activeIndex + direction;
    if (newIndex === order.length) return 0;
    if (newIndex === -1) return order.length - 1;
    return newIndex;
  }
  function next(direction) {
    if (timer) {
      clearTimeout(timer);
      timer = null;
    }
    timer = setTimeout(next, delay);
    activeImg().style.display = 'none';
    activeIndex = getIndex(direction || 1);
    activeImg().style.display = 'block';
    cb(activeImg());
  }
  function prev() {
    next(-1);
  }
  for (var i = 0, len = imgs.length; i < len; i++) {
    imgs[i].style.display = 'none';
  }
  next();
  return {
    next: next,
    prev: prev
  };
}

}());
