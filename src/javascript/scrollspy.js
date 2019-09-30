$(document).ready(function () {
    var body = document.body,
        html = document.documentElement;
    $(window).scroll(function () {
        var h = body.scrollHeight - html.clientHeight;
        console.log("max height:", h);
        var y = $(window).scrollTop();
        console.log("scroll px :", y);
        var scrollPercent = (y * 100) / h;
        console.log("scroll % :", scrollPercent);
        if (scrollPercent < 74) {
            document.getElementById("nav-timeline").classList.remove("md-inactive");
            document.getElementById("nav-projects").classList.add("md-inactive");
            document.getElementById("nav-media").classList.add("md-inactive");
        } else if (scrollPercent >= 74 && scrollPercent < 94.5) {
            document.getElementById("nav-timeline").classList.add("md-inactive");
            document.getElementById("nav-projects").classList.remove("md-inactive");
            document.getElementById("nav-media").classList.add("md-inactive");
        } else {
            document.getElementById("nav-timeline").classList.add("md-inactive");
            document.getElementById("nav-projects").classList.add("md-inactive");
            document.getElementById("nav-media").classList.remove("md-inactive");
        }
        // $(".scrollLine").css("width", scrollPercent + "%");
    });
});