let slider = tns({
    container: '.slider-container',
    items:1,
    gutter: 10,
    autoplay:true,
    mousedrag:true,
    controls:false,
    nav:false,
    autoplayButtonOutput:false,
    responsive:{
        640:{
            items:2,
        },
        760: {
            items: 3,
        }
    }
})
function myFunction() {
    var x = document.getElementById("mMenu");
    if(x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}