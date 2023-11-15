// Use Black Dip
const useDip = (event = () => {}) => {

    const comp = document.getElementById('__blackDip__')
    comp.style.display = "block"

    comp.addEventListener('click', () => {
        
        event()

        // Refresh Dip
        comp.style.display = "none"
        var new_comp = comp.cloneNode(true)
        comp.parentNode.replaceChild(new_comp, comp)

    })

}

// Hide Dip
const hideDip = () => {
    document.getElementById('__blackDip__').style.display = 'none'
}

// Show Mobile Sidebar Menu
document.getElementById('navbarMB').addEventListener('click', () => {

    const navbarMS = document.getElementById('navbarMS')
    navbarMS.style.transform = "translateX(0)"

    // Close Mobile Sidebar Menu
    useDip(() => {
        navbarMS.style.transform = "translateX(100%)"
    })

})

// Close Mobile Sidebar Menu
document.getElementById('navbarMSClose').addEventListener('click', () => {
    navbarMS.style.transform = "translateX(100%)"
    hideDip()
})