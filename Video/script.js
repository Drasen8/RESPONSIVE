let pas = 0;
let pas2 = 0;
let volumen=0;
window.onload = function () {
  pausar.addEventListener("click", pausarono);
  mutear.addEventListener("click", mutearr);
  subir.addEventListener("click", subirr);
  bajar.addEventListener("click", bajarr);
  palante.addEventListener("click", palantee);
  patras.addEventListener("click", patrass);
  recargar.addEventListener("click", recargarr);

  let bloqueador=document.getElementById("bloqueador");
    bloqueador.classList.add("bloquear");
    let anunciobueno=document.getElementById("anunciobueno");
    anunciobueno.classList.add("anunciar");
    let tiempo=document.createElement("p");
    tiempo.innerText=setTimeout.currentTime;
    anunciobueno.appendChild(tiempo)
};
function pausarono() {
  if (pas == 0) {
    video.pause();
    pas = 1;
  } else {
    video.play();
    pas = 0;
  }
}
function mutearr() {
    if (pas2 == 0) {
        video.muted=true;
        pas2 = 1;
      } else {
        video.muted=false;
        pas2 = 0;
      }
}
function subirr() {
    video.volume=video.volume+0.1;
}
function bajarr() {
    video.volume=video.volume-0.1;
}
function palantee(){
    video.currentTime=video.currentTime+10;
}
function patrass(){
    video.currentTime=video.currentTime-10;
}
function recargarr(){
    video.load();
}

setTimeout(function (){
    saltaranuncio.addEventListener("click", saltaranuncioo);
    
}, 10000);
function saltaranuncioo(){
    let bloqueador=document.getElementById("bloqueador");
    bloqueador.classList.remove("bloquear");
    let anunciobueno=document.getElementById("anunciobueno");
    anunciobueno.classList.remove("anunciar");
}