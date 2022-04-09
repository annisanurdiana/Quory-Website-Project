let intro = document.querySelector('.intro');
let wellcome = document.querySelector('.wellcome-header');
let wellcomeSpan = document.querySelectorAll('.wellcome')

window.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        wellcomeSpan.forEach((span, idx) => {
            setTimeout(() => {
                span.classList.add('active');
            }, (idx + 1) * 400)
        });

        setTimeout(() => {
            wellcomeSpan.forEach((span, idx) => {
                setTimeout(() => {
                    span.classList.remove('active');
                    span.classList.add('fade');
                }, (idx + 1) * 50 )
            });
        }, 2000);

        setTimeout(() => {
            intro.style.top = '-100vh';
        }, 2300);

    })
})