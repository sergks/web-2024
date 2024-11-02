const buttons = document.querySelectorAll('.product-item .btn-cart')

buttons.forEach((button) => {
  button.addEventListener('click', () => {
    button.classList.add('btn-buy')
    button.innerText = 'В корзине'
  })
})

const searchResult = document.querySelector('.search .search-result')

const searchBlock = document.querySelector('.search input')
searchBlock.addEventListener('keyup', (event) => {
  if (searchBlock.value.length >= 3) {
    searchResult.classList.remove('hidden')
  } else {
    searchResult.classList.add('hidden')
  }
})
