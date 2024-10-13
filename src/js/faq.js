document.addEventListener('DOMContentLoaded', function () {
    const faqIcons = document.querySelectorAll('.faq-question i');

    faqIcons.forEach(icon => {
        icon.addEventListener('click', function () {
            const answer = this.parentElement.nextElementSibling;

            if (answer.style.display === 'block') {
                answer.style.display = 'none';
            } else {
                answer.style.display = 'block';
            }

            
            this.classList.toggle('active'); 
        });
    });
});
