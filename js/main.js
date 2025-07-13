const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const registerInputs = document.querySelectorAll('.form-box .register input');
const loginInputs = document.querySelectorAll('.form-box .login input');

registerLink.addEventListener('click', () =>{
    wrapper.classList.add('active');
    registerInputs.forEach(input => input.setAttribute('required', 'true'));

  // Quitar 'required' de los inputs del login
  loginInputs.forEach(input => input.removeAttribute('required'));
});

loginLink.addEventListener('click', () =>{
    wrapper.classList.remove('active');
});