var els = document.getElementsByName("del");
els.forEach(function(item) {
    item.addEventListener("click", function(){
        item.parentNode.parentNode.removeChild(item.parentNode);
    });
});