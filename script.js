// Mobile menu
const toggle = document.querySelector('.mobile-toggle');
const body = document.body;
if (toggle){
  toggle.addEventListener('click', ()=> body.classList.toggle('mobile-open'));
}

// Scroll reveal
const observer = new IntersectionObserver((entries)=>{
  entries.forEach(e=>{
    if(e.isIntersecting){ e.target.classList.add('visible'); observer.unobserve(e.target); }
  })
}, {threshold: 0.12});

document.querySelectorAll('.reveal').forEach(el=> observer.observe(el));

// Progress bars animation on skills page
function animateBars(){
  document.querySelectorAll('[data-progress]').forEach(bar=>{
    const pct = bar.getAttribute('data-progress');
    requestAnimationFrame(()=> bar.style.width = pct + '%');
  });
}
if (document.body.classList.contains('skills-page')){
  setTimeout(animateBars, 300);
}

// Smooth scroll to top for internal nav (optional)
document.querySelectorAll('a[href="#top"]').forEach(a=>{
  a.addEventListener('click', e=>{ e.preventDefault(); window.scrollTo({top:0, behavior:'smooth'}) })
});
