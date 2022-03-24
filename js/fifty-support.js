if (!document.body.animate) {
    circles.forEach((circle, index) => {
      setTimeout(() => {
        anime({
          targets: circle,
          scale: 1.2,
          easing: 'linear',
          duration: 1500,
          direction: 'alternate',
          loop: true
        })
      }, 300 * index)
    })
    squiggles.forEach((squiggle, index) => {
      setTimeout(() => {
        anime({
          targets: squiggle,
          rotate: random(0, 45),
          easing: 'linear',
          duration: 2500,
          direction: 'alternate',
          loop: true
        })
      }, 300 * index)
    })
  }