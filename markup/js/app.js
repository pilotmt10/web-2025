const buttons = document.querySelectorAll('.product-item button')

// function buttonClick() {
//   //
// }
//
// const buttonClick1 = function () {
//
// }
//
// const buttonCLick2 = (item, item2) => {
//   return item * 10
// }
//
// const buttonClick3 = (item) => item * 10


buttons.forEach((button) => {
  button.addEventListener('click', (event) => {
    const id = button.getAttribute('data-id')
    console.log(id)
  })
})

document.querySelector('form').addEventListener('submit', () => {
  //
})