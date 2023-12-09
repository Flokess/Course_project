
const submenus = document.querySelectorAll('.submenu');

// Add event listeners to each submenu
submenus.forEach(submenu => {
        const parentMenuItem = submenu.parentNode;

        // Show submenu on mouse enter
        parentMenuItem.addEventListener('mouseenter', () => {
                submenu.style.display = 'block';
        });

        // Hide submenu on mouse leave
        parentMenuItem.addEventListener('mouseleave', () => {
                submenu.style.display = 'none';
        });
});

document.addEventListener('DOMContentLoaded', function() {
        const writeReviewButton = document.getElementById('writeReviewButton');
        const reviewForm = document.getElementById('reviewForm');

        writeReviewButton.addEventListener('click', function() {
                reviewForm.style.display = (reviewForm.style.display === 'none' || reviewForm.style.display === '') ? 'block' : 'none';
        });
});

document.addEventListener('DOMContentLoaded', function() {
        const emojis = document.querySelectorAll('.emoji');
        const rating = document.getElementById('ratingStars');

        emojis.forEach(emoji => {
                emoji.addEventListener('click', function() {
                        const value = this.dataset.value;
                        rating.dataset.rating = value;
                        emojis.forEach(e => {
                                const eValue = e.dataset.value;
                                if (eValue === value) {
                                        e.classList.add('active');
                                } else {
                                        e.classList.remove('active');
                                }
                        });
                });
        });
});

document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.star');
        const rating = document.getElementById('ratingStars');

        stars.forEach(star => {
                star.addEventListener('click', function() {
                        const value = this.getAttribute('data-value');
                        rating.setAttribute('data-rating', value);
                        stars.forEach(s => {
                                if (s.getAttribute('data-value') <= value) {
                                        s.classList.add('active');
                                } else {
                                        s.classList.remove('active');
                                }
                        });
                });
        });
});