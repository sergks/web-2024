const buttons = document.querySelectorAll('.product-item .btn-cart')

buttons.forEach((button) => {
  button.addEventListener('click', (event) => {
    button.classList.add('btn-cart-buy')
    button.innerText = 'Добавлен'

    setTimeout(() => {
      button.classList.remove('btn-cart-buy')
      button.innerText = 'Купить'
    }, 1000)
  })
})

const searchResult = document.querySelector('.search-result')

const searchBlock = document.querySelector('.search input')
searchBlock.addEventListener('keyup', (event) => {
  if (searchBlock.value.length >= 3) {
    // GET /site/search?query=Камеры
    searchResult.classList.remove('hidden')
  } else {
    searchResult.classList.add('hidden')
  }
})