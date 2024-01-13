let navbar = document.querySelector('.navbar');
document.querySelector('#menu-icon').onclick = () => {
    navbar.classList.toggle('active');
}
window.onscroll = () => {
    navbar.classList.remove('active');
}
document.querySelectorAll('.about .about-perant .vedio-container .controls .control-btn').forEach(btn => {
    btn.onclick = () => {
        let src = btn.getAttribute('data-src');
        document.querySelector('.about .vedio-container .vedio').src = src;
    }

});
AOS.init({
    duration: 400,
    delay: 200,
 });