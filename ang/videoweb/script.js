const container = document.querySelector('.container');
const toggle = document.querySelector('.toggle');

container.addEventListener('click', () => {
  container.classList.toggle('active');
  toggle.classList.toggle('active');
});
