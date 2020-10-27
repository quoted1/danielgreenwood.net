document.addEventListener("mousemove" , parallax);
function parallax(e){
    this.querySelectorAll('.paraImage_lin').forEach(paraImage_lin => {
        const speed = paraImage_lin.getAttribute('data-speed')
        const halfWidth = window.innerWidth/2;
        const halfHeight = window.innerHeight/2;
        const x = (-halfWidth + e.pageX)/(speed*1.2);
        const y = (-halfHeight + e.pageY)/(speed*1.2);

        paraImage_lin.style.transform = `translateX(${x}px) translateY(${y}px)`
    })
}