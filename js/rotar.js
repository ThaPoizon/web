document.querySelectorAll('.rotate-on-hover').forEach(item => {
    item.addEventListener('mouseover', function() {
        this.querySelector('img').style.transform = 'rotate(360deg)';
        this.querySelector('img').style.transition = 'transform 0.5s ease-in-out';
    });
    item.addEventListener('mouseout', function() {
        this.querySelector('img').style.transform = 'rotate(0deg)';
        this.querySelector('img').style.transition = 'transform 0.5s ease-in-out';
    });
});