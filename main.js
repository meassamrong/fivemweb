window.onload = function() {
    document.body.addEventListener("mousemove", function(event) {
        var x = event.pageX - 1 + "px"
        var y = event.pageY + 1 + "px"
        document.getElementById("cursor").style.left = x;
        document.getElementById("cursor").style.top = y;
    })
};