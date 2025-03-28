function changeSlide(slideshowId, direction) {
    const slideshow = document.getElementById(slideshowId);
    const slides = slideshow.querySelectorAll('.slide');
    const totalSlides = slides.length;

    let currentSlideIndex = Array.from(slides).findIndex(slide => slide.style.display === 'block');

    if (currentSlideIndex === -1) {
        currentSlideIndex = 0;
    }

    slides[currentSlideIndex].style.display = 'none';

    const newSlideIndex = (currentSlideIndex + direction + totalSlides) % totalSlides;

    slides[newSlideIndex].style.display = 'block';
}

document.addEventListener('DOMContentLoaded', () => {
    const slideshows = document.querySelectorAll('.slideshow');

    slideshows.forEach(slideshow => {
        const slides = slideshow.querySelectorAll('.slide');
        slides.forEach((slide, index) => {
            slide.style.display = index === 0 ? 'block' : 'none';
        });

        const prevButton = slideshow.querySelector('.prev');
        const nextButton = slideshow.querySelector('.next');

        if (prevButton && nextButton) {
            const slideshowId = slideshow.id;
            prevButton.addEventListener('click', () => changeSlide(slideshowId, -1));
            nextButton.addEventListener('click', () => changeSlide(slideshowId, 1));
        }
    });
});