const login = document.querySelector('.login-form-login')
const password = document.querySelector('.login-form-password')

document.querySelector('.login-form').addEventListener('submit', (e) => {
    e.preventDefault()
    console.log(login.value + ' ' + password.value)
})