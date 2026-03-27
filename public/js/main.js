/**
 * @param {Object} config 
 * @param {string} config.selector
 * @param {string} config.active 
 * @param {string} config.inActive 
 * @param {string} config.value 
 */
function selectItem({ selector, active, inActive, value }) {
  const items = document.querySelectorAll(selector)

  items.forEach((item) => {
    if (item.textContent === value) {
      item.classList.add(active)
      if (inActive) item.classList.remove(inActive)
    } else {
      item.classList.remove(active)
      if (inActive) item.classList.add(inActive)
    }
  })

  items.forEach((item) => {
    item.addEventListener("click", () => {
      items.forEach((i) => {
        i.classList.remove(active)
        if (inActive) i.classList.add(inActive)
      })
      item.classList.add(active)
      if (inActive) item.classList.remove(inActive)
    })
  })
}

function initMobileMenu() {
  const toggle = document.getElementById('mobileMenuToggle')
  const nav = document.querySelector('.nav')

  if (!toggle || !nav) return

  toggle.addEventListener('click', () => {
    toggle.classList.toggle('active')
    nav.classList.toggle('active')
  })

  const navLinks = document.querySelectorAll('.nav a')
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      toggle.classList.remove('active')
      nav.classList.remove('active')
    })
  })

  document.addEventListener('click', (e) => {
    if (!nav.contains(e.target) && !toggle.contains(e.target)) {
      toggle.classList.remove('active')
      nav.classList.remove('active')
    }
  })

  let resizeTimer
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer)
    resizeTimer = setTimeout(() => {
      if (window.innerWidth > 800) {
        toggle.classList.remove('active')
        nav.classList.remove('active')
      }
    }, 250)
  })
}

document.addEventListener('DOMContentLoaded', function() {

  initMobileMenu()

  selectItem({
    selector: ".third-header button",
    active: "red-btn",
    inActive: "white-btn",
    value: "Сегодня"
  })

  selectItem({
    selector: ".nav a",
    active: "active",
    inActive: "inActive",
    value: "Афиша"
  })
})