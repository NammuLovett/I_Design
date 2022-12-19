const container = document.querySelector('.container');
const toggle = document.querySelector('.toggle');

container.addEventListener('click', () => {
  container.classList.toggle('active');
  toggle.classList.toggle('active');
});

/* display block
width 50px
height 50px

border box 
margin 0
padding 0

contenedor líneas{
  span
  span
  span  

  display block
  opacity 0.
  transform origin
}
 */
