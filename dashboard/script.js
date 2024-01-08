document.addEventListener('DOMContentLoaded', function () {
  const showPopupButton = document.getElementById('show-popup');
  const closePopupButton = document.getElementById('close-popup');
  const loginPopup = document.getElementById('login-popup');
  const redirectToPageButton = document.getElementById('redirect-button'); 

  showPopupButton.addEventListener('click', () => {
    loginPopup.style.display = 'block';
  });

  closePopupButton.addEventListener('click', () => {
    loginPopup.style.display = 'none';
  });

  redirectToPageButton.addEventListener('click', () => { 
    window.location.href = '../index.php'; 
  });
});
