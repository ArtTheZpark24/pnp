
const sideNav = document.getElementById('sidebar');
const profileContainer = document.getElementById('profile-container');
const btnBar = document.getElementById('btn-bar');
const dash = document.querySelectorAll('.border-sky-500');


if (sideNav.classList.contains('w-[50px]')) {
    profileContainer.classList.add('hidden');
}

btnBar.addEventListener('click', () => {
   
    profileContainer.classList.toggle('hidden');
    sideNav.classList.toggle('w-[50px]');
    sideNav.classList.toggle('w-[300px]');


   
  
});



