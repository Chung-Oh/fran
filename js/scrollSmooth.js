//Abaixo com Vanilla JavaScript
function scrollSmooth(selector) {

    document.querySelector(selector).scrollIntoView({ behavior: 'smooth' });

    document
    .querySelector(selector)
    .addEventListener('click', function(event) {
        event.preventDefault();
        var target = this;
        run(target);
        setTimeout(function() {
            run(target);
        }, 700);
    });
}

function run(arg) {
    var page = document.querySelectorAll('html, body');
    var origin = Math.max(page[0].scrollTop, page[1].scrollTop);
    var dest = document.querySelector(arg.attributes.href.value).offsetTop;
    var time = 500;
    var step = 5;
    var counter = 0;
    var e = null;

    var animationId = setInterval(function() {
        counter++;
        page.forEach(function(event) {
            e = event;
            e.scrollTop = origin + ((dest - origin) * counter * step / time);
        });
    }, step);

    setTimeout(function() {
        clearInterval(animationId);
        e.scrollTop = dest;
    }, time);
}

var device = window.innerWidth;

if (device >= 1000) {
    scrollSmooth('a[href*=home]');
    scrollSmooth('a[href*=about]');
    scrollSmooth('a[href*=service]');
    scrollSmooth('a[href*=jobs]');
    scrollSmooth('a[href*=contact]');
}
