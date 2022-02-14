// block right click
window.oncontextmenu = function () {
    return false;
}

// block developer options
document.onkeydown = function(e) {
    if(event.keyCode == 123)
    {
        // F12
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0))
    {
        // ctrl + shift + I
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0))
    {
        // ctrl + shift + C
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0))
    {
        // ctrl + shift + J
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))
    {
        // ctrl + U
        return false;
    }
}