import './bootstrap';
import "./lib/password-generator"
// import Typed from 'typed.js';
//@ts-expect-error
import.meta.glob(["../img/**/*"])

const scaleSlider = document.getElementById('pattern_size') as HTMLInputElement
const patternElements = document.querySelectorAll('[id^="dbc-"]');
const colorInput = document.getElementById("pattern_color") as HTMLInputElement;

if (scaleSlider && patternElements.length && colorInput) {
    scaleSlider!.addEventListener('input', function () {
        console.log(scaleSlider!.value)
        const scaleValue = parseFloat(scaleSlider.value);
        patternElements.forEach(item => {
            item.setAttribute('patternTransform', `rotate(0) scale(${scaleValue})`);
        })
    });

    colorInput!.addEventListener('input', function () {
        const selectedColor = colorInput.value
        patternElements.forEach(item => {
            item.setAttribute('style', `color: ${selectedColor}`);
        })
    });
}


// const typed = new Typed('#logo', {
//     strings: ['DesignByCode', 'designbycode'],
//     typeSpeed: 50,
//     backSpeed: 100,
//     smartBackspace: true,
//     backDelay: 1700,
//     showCursor: false,
//     loop: true,
//     fadeOutClass: 'typed-fade-out',
//     fadeOutDelay: 500,
// });




