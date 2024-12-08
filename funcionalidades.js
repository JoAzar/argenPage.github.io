
/*--------------------BOTÓN SUBIR-----------------------------------*/
const scrollStep = 20;

function scrollUp() {
  const currentScroll = window.scrollY;
  if(currentScroll > 0) {
    window.requestAnimationFrame(scrollUp);
    window.scrollTo(0, Math.max(0, currentScroll - scrollStep));
  }
}

function scrollDown() {
  const currentScroll = window.scrollY;
  const windowHeight = window.innerHeight;
  const documentHeight = Math.max(
    document.body.scrollHeight, document.documentElement.scrollHeight,
    document.body.offsetHeight, document.documentElement.offsetHeight,
    document.body.clientHeight, document.documentElement.clientHeight
  );

  if (currentScroll + windowHeight < documentHeight) {
    window.requestAnimationFrame(scrollDown);
    window.scrollTo(0, currentScroll + Math.min(scrollStep, documentHeight - currentScroll - windowHeight));
  }
}

document.getElementById("subir").addEventListener("click",scrollUp);
document.getElementById("bajar").addEventListener("click",scrollDown);