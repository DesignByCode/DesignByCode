import gsap from "gsap"
import ScrollTrigger from "gsap/ScrollTrigger"
gsap.registerPlugin(ScrollTrigger)

const tentacles =  document.querySelectorAll('.hero .tentacle')
const tentaclesArm =  document.querySelectorAll('.tentacle-arm')

if (tentaclesArm) {
    tentaclesArm.forEach(arm => {
        gsap.from(arm, {
            x: "200%",
            // duration: 2,
            ease: "power4",
            scrollTrigger: {
                trigger: arm,
                scrub: 4,
                start: "top 80%",
                end: "top 20%",
                toggleActions: "play none none reverse",
                markers: false
            }
        })
    })
}



if (tentacles.length) {
  gsap.to(tentacles, {rotate: 6, y: 10, x: 10, duration: 4, stagger: {
      each: 0.2, from: "random"
    }, repeat: -1, yoyo: true, ease: "sine.inOut"})

  // tentacles.forEach(tentacle => {
  //   const animation: GSAPAnimation = gsap.to(tentacle, {scaleY: 0.75,  duration: 0.25, yoyo: true , ease: "back.out", paused: true})
  //   tentacle.addEventListener('mouseover', () => animation.play())
  //   // tentacle.addEventListener('mouseleave', () => animation.reverse())
  // })
}


