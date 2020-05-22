let slideIndex = 0;

showSlide(slideIndex);

function showSlide(index) {

    let slides = $('.slide_item');
    let dots = $('.dot_nagvigation');

    if( index >= slides.length){ slideIndex = 0}
    if( index < 0 ){ slideIndex = slides.length - 1}

    for (let i = 0; i < slides.length; i++){

        slides[i].style.display = "none";
        dots[i].classList.remove('active_dot')
    }

        slides[slideIndex].style.display = "block";
        dots[slideIndex].classList.add('active_dot')

}

document.querySelectorAll('.dot_nagvigation').forEach(function(element){

    element.addEventListener('click', function(){

        let dots = Array.prototype.slice.call(this.parentElement.children)

        let dotIndex = dots.indexOf(element);

        showSlide(slideIndex = dotIndex)

    })

})

setInterval(function(){

    showSlide(++slideIndex)

},15000)