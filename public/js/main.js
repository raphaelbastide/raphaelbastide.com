var currImgId = null;

var cycleControls = cycle(document.querySelector('.images'), 7000, function(img) {
  currImgId = img.id;
  connect();
});

window.addEventListener('scroll', connect);
window.addEventListener('resize', connect);
document.addEventListener('keyup', function(event) {
  var direction = ({ 37: 'prev', 39: 'next' })[event.keyCode];
  if (direction) cycleControls[direction]();
});

connect();

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
  var imgs = container.querySelectorAll('img');
  var order = shuffle(Object.keys(imgs));
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
    cb(activeImg());
    activeImg().style.display = 'block';
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
var img = document.querySelector('.images');
img.addEventListener('click', function(){
  cycleControls['next']();
},false);


var form = document.getElementById('newsletter-form'),
    formBtn = document.querySelector('.formBtn'),
    formInput =  document.querySelector('.email');
formBtn.addEventListener('click', function(){
  if(form.classList.contains('opened')){
    form.classList.remove('opened');
  }else{
    form.classList.add('opened');
    formInput.focus()
  }
},false);



//+ Jonas Raoni Soares Silva
//@ http://jsfromhell.com/array/shuffle [v1.0]
function shuffle(o){ //v1.0
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
};
