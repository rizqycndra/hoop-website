var currentBanner = 0

// COMPONENT
const data = JSON.parse(document.querySelector('#bigBanner script').textContent)
const image = document.querySelector('#bigBanner img')
const button = {
    previous: document.querySelectorAll('#bigBanner #move button')[0],
    next: document.querySelectorAll('#bigBanner #move button')[1]
}
const slideButton = document.querySelectorAll('#bigBanner #dot button')

// FUNCTION
const changeBanner = move => {

    if (move == 'next' && currentBanner < data.length - 1) {
        image.setAttribute('src', 'storage/banner/' + data[currentBanner + 1].image)
        currentBanner += 1
    } else if (move == 'previous' && currentBanner != 0) {
        image.setAttribute('src', 'storage/banner/' + data[currentBanner - 1].image)
        currentBanner -= 1
    }

}

button.next.addEventListener('click', () => changeBanner('next'))
button.previous.addEventListener('click', () => changeBanner('previous'))