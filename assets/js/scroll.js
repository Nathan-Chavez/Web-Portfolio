document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('nav a');

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const href = this.getAttribute('href');
            loadPage(href);
            scrollToSection(href);
        });
    });
});

function loadPage(url) {
    fetch(url)
        .then(response => response.text())
        .then(html => {
            document.getElementById('content').innerHTML = html;
        })
        .catch(error => console.error('Error:', error));
}

function scrollToSection(hash) {
    const target = document.querySelector(hash);
    if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
    }
}
