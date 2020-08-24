document.addEventListener("mousemove" , parallax);

function parallax(e){
    this.querySelectorAll('.paraImage').forEach(paraImage => {
        const speed = paraImage.getAttribute('data-speed')
        const x = (window.innerWidth - e.pageX*speed)/50;
        const y = (window.innerHeight - e.pageY*speed)/50;

        paraImage.style.transform = `translateX(${x}px) translateY(${y}px)`
    })
}