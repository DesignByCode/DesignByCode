const mainBanner: HTMLElement | null = document.getElementById('main-banner')
const svgListItems: NodeListOf<HTMLElement> = document.querySelectorAll('.pattern-example')

if (mainBanner && svgListItems.length) {
    const selectRandomSvg = () => {
        const randomIndex = Math.floor(Math.random() * svgListItems.length);
        mainBanner!.innerHTML = svgListItems[randomIndex].innerHTML;
    }

    svgListItems!.forEach(svgItem => {
        svgItem.addEventListener('mouseover', () => {
            mainBanner!.innerHTML = svgItem.innerHTML
        })
    })

    window.addEventListener('DOMContentLoaded', selectRandomSvg)
}


