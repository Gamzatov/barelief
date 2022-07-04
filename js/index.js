var btn = document.getElementById('show');
var close = document.getElementById('hide');
var nav = document.getElementById('nav');

close.addEventListener('click', function(){
    nav.classList.toggle('active');
})
btn.addEventListener('click', function() {
    nav.classList.toggle('active');
});
