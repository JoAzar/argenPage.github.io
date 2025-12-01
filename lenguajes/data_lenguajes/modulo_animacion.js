export function animateText() {
    anime({
        targets: '#textArea',
        translateY: 1250,
        opacity: [0, 1],
        duration: 2000,
        easing: 'easeInOutBounce'
    }).finished.then(() => {   
        const element = document.getElementById('textArea');
        if(element) {
            element.remove();
        }
    });

}

export function animateSVG() {
    anime({
        targets: '#animar_svg',
        strokeDasharray: [0, 1000],
        strokeDashoffset: [1000, 0],
        duration: 2000,
        easing: 'easeInOutSine'
    });
}