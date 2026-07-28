document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.js-calendar-carousel').forEach((carousel) => {
        const track = carousel.querySelector('.calendar-carousel__track');
        const slides = carousel.querySelectorAll('.calendar-carousel__slide');
        const prevButton = carousel.querySelector(
            '.calendar-carousel__button--prev'
        );
        const nextButton = carousel.querySelector(
            '.calendar-carousel__button--next'
        );
        const dotsContainer = carousel.querySelector(
            '.calendar-carousel__dots'
        );

        let currentIndex = 0;
        let touchStartX = 0;
        let touchEndX = 0;

        slides.forEach((_, index) => {
            const dot = document.createElement('button');

            dot.type = 'button';
            dot.className = 'calendar-carousel__dot';
            dot.setAttribute(
                'aria-label',
                `${index + 1}枚目のカレンダーを表示`
            );

            dot.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
            });

            dotsContainer.appendChild(dot);
        });

        const dots = dotsContainer.querySelectorAll(
            '.calendar-carousel__dot'
        );

        const updateCarousel = () => {
            track.style.transform = `translateX(-${currentIndex * 100}%)`;

            prevButton.disabled = currentIndex === 0;
            nextButton.disabled = currentIndex === slides.length - 1;

            dots.forEach((dot, index) => {
                dot.classList.toggle('is-active', index === currentIndex);
                dot.setAttribute(
                    'aria-current',
                    index === currentIndex ? 'true' : 'false'
                );
            });
        };

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        nextButton.addEventListener('click', () => {
            if (currentIndex < slides.length - 1) {
                currentIndex++;
                updateCarousel();
            }
        });

        carousel.addEventListener(
            'touchstart',
            (event) => {
                touchStartX = event.changedTouches[0].clientX;
            },
            { passive: true }
        );

        carousel.addEventListener(
            'touchend',
            (event) => {
                touchEndX = event.changedTouches[0].clientX;
                const distance = touchStartX - touchEndX;

                if (Math.abs(distance) < 50) return;

                if (distance > 0 && currentIndex < slides.length - 1) {
                    currentIndex++;
                } else if (distance < 0 && currentIndex > 0) {
                    currentIndex--;
                }

                updateCarousel();
            },
            { passive: true }
        );

        updateCarousel();
    });
});