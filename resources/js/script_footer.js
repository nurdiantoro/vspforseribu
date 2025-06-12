document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    toggle?.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Ini yang penting: expose ke global agar bisa dipanggil dari HTML
    window.toggleHeart = function (button) {
        const iconSpan = button.querySelector('.heart-icon');
        const liked = iconSpan.getAttribute('data-liked') === 'true';

        iconSpan.setAttribute('data-liked', !liked);

        iconSpan.innerHTML = liked
            // Outline
            ? `<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
               </svg>`
            // Solid
            : `<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                   <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42
                        4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 3.81
                        14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4
                        6.86-8.55 11.54L12 21.35z" />
               </svg>`;
    };
});
