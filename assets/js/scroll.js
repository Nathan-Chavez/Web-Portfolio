document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section[data-scroll]');
    const navLinks = document.querySelectorAll('.nav-link');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            const id = entry.target.getAttribute('id');
            if (entry.isIntersecting) {
                setActiveNavLink(id);
            }
        });
    }, { rootMargin: '-30% 0px -70% 0px' });

    sections.forEach(section => {
        observer.observe(section);
    });

    function setActiveNavLink(id) {
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').slice(1) === id) {
                link.classList.add('active');
            }
        });
    }
});

