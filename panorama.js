window.onload=init;

function init(){
document.getElementById("mask").getElementsByTagName("div")[2]
.onclick=function(){anim('',this)};

anim();
}

var animace;
function anim(pos,t){
  var step = 20;
  var wrap = document.getElementById("wrapper");
  if(t){
    if(t.className=="remote stop"){
      clearTimeout(animace);
      t.className="remote play";
      return false;
    }else{
      var position = (wrap.style.backgroundPosition.split(' '));
      var horiz = (position[0].replace(/[^0-9.]*/g, ''));
      animace = setTimeout(function(){anim((horiz*1))}, step);
      t.className="remote stop";
      return false;
    }
  }
  if(!pos)var pos = 0;
  wrap.style.backgroundPosition = "-"+pos+"px 0";
  animace = setTimeout(function(){anim((pos+.5))}, step);
}