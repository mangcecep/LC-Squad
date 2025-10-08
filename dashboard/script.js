const profileBtn = document.getElementById('profileBtn');
const profilePopup = document.getElementById('profilePopup');
const closePopup = document.getElementById('closePopup');
const logoutBtn = document.getElementById('logoutBtn');

profileBtn.addEventListener('click', () => {
  profilePopup.classList.add('active');
});

closePopup.addEventListener('click', () => {
  profilePopup.classList.remove('active');
});

profilePopup.addEventListener('click', (e) => {
  if (e.target === profilePopup) {
    profilePopup.classList.remove('active');
  }
});

logoutBtn.addEventListener('click', () => {
  if (confirm('Are you sure you want to log out?')) {
    alert('Logging out...');
    profilePopup.classList.remove('active');
  }
});