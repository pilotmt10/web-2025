const buttons = document.querySelectorAll('.product-item button')

buttons.forEach((item) => {

  item.addEventListener('click', () => {
    console.log(item.getAttribute('data-id'));
  })

})