function toggleMenu() {
    var menu = document.getElementById("menu");
    if (menu.style.display === "none" || menu.style.display === "") {
        menu.style.display = "block";
    } else {
        menu.style.display = "none";
    }
}
let x = document.getElementsByClassName("menu-toggle");
x = Array.from(x);
x.forEach(btn => {
    btn.addEventListener("click", toggleMenu);
});
let y = document.getElementsByClassName("close");
y = Array.from(y);
y.forEach(close => {
    let _hr = document.createElement('hr');
    _hr.setAttribute('id', 'close-hr');
    close.appendChild(_hr);
});
Array.from($('#menu ul li')).forEach(_li => {
    _li.setAttribute('style', "");
    _li.addEventListener("mouseenter", function () {
        let bgurl = this.getAttribute("data-background");
        console.log(bgurl);
        $(this)[0].attributes.style.value =
            `background-image: var(--gradient), url(${bgurl}); border-top: 1px solid white;border-bottom: 1px solid white`;
    });
    _li.addEventListener("mouseleave", function () {
        $(this)[0].attributes.style.value =
            "background-image: ;border-top: 1px solid #2e2e30; border-bottom: 1px solid #2e2e30";
    });
});


let a = $("a").html;
console.log(a);