document.addEventListener('DOMContentLoaded', function () {
  const showLoginPopupButton = document.getElementById('show-popup');
  const showSignupPopupButton = document.getElementById('showSignup'); // Menambahkan variabel untuk tombol "Sign up"
  const closeLoginPopupButton = document.getElementById('close-login-popup'); // Mengganti ID untuk tombol close login popup
  const closeSignupPopupButton = document.getElementById('close-signup-popup'); // Mengganti ID untuk tombol close sign up popup
  const loginPopup = document.getElementById('login-popup');
  const signupPopup = document.getElementById('signup-popup');

  showLoginPopupButton.addEventListener('click', () => {
    loginPopup.style.display = 'block';
  });

  showSignupPopupButton.addEventListener('click', () => { // Menambahkan event listener untuk tombol "Sign up"
    signupPopup.style.display = 'block';
  });

  closeLoginPopupButton.addEventListener('click', () => {
    loginPopup.style.display = 'none';
  });

  closeSignupPopupButton.addEventListener('click', () => { // Menambahkan event listener untuk tombol close sign up popup
    signupPopup.style.display = 'none';
  });

});
