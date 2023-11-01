import './bootstrap';
import "./lib/password-generator"
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

// const observer = new IntersectionObserver(entries => {
//     entries.forEach(entry => {
//         console.log(entry)
//     })
// })
//
// const cards: any = document.querySelectorAll('.card')
// if (cards.length) {
//     cards.forEach((card: any) => {
//         observer.observe(card)
//     })
// }


//
// const colorInput = document.getElementById("pattern_color") as HTMLInputElement;
// const colorDisplay = document.getElementById("colorDisplay") as HTMLSpanElement;
// const svgItems = document.querySelectorAll('.edit_svg svg') as NodeListOf<HTMLOrSVGImageElement>
// colorInput.addEventListener("input", () => {
//     const selectedColor = colorInput.value;
//     colorDisplay.textContent = selectedColor;
//     svgItems.forEach(svgItem => {
//         // svgItem.style.color = selectedColor
//         // svgItem.style.color = selectedColor
//         svgItem.setAttribute('style', `color: ${selectedColor}`)
//     })
// });



