document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll('.nav-menu a[href^="#"], .btn-contact');

    links.forEach(link => {
        link.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId.length > 1 && targetId.startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(targetId);
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 60, // adjust navbar height if needed
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    console.log("Smooth scroll script loaded successfully.");
});
