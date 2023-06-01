function initializeCarousel(slideClass, prevBtnId, nextBtnId) {
    let slidePosition = 0;
    const slides = document.getElementsByClassName(slideClass);
    const totalSlides = slides.length;

    slides[slidePosition].classList.add('active');

    document.getElementById(prevBtnId).addEventListener("click", function() {
        moveToPrevSlide();
    });

    document.getElementById(nextBtnId).addEventListener("click", function() {
        moveToNextSlide();
    });

    function updateSlidePosition() {
        for (let slide of slides) {
            slide.classList.remove('active');
        }

        slides[slidePosition].classList.add('active');
    }

    function moveToNextSlide() {
        if (slidePosition === totalSlides - 1) {
            slidePosition = 0;
        } else {
            slidePosition++;
        }

        updateSlidePosition();
    }

    function moveToPrevSlide() {
        if (slidePosition === 0) {
            slidePosition = totalSlides - 1;
        } else {
            slidePosition--;
        }

        updateSlidePosition();
    }
}

initializeCarousel('carousel-image', 'prevBtn', 'nextBtn');
initializeCarousel('carousel-image2', 'prevBtn2', 'nextBtn2');

let observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        } else {
            entry.target.classList.remove('visible');
        }
    });
});

document.querySelectorAll('.scroll-fade').forEach(item => {
    observer.observe(item);
});