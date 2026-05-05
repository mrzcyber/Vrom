  // alpine js
  import Alpine from 'alpinejs'

  window.Alpine = Alpine
  Alpine.start()

  // aos library
  import AOS from 'aos'


AOS.init({ once: true, duration: 300,  offset: 0  })


// main content

  const input = document.getElementById('photo')
  const prev = document.getElementById('preview')
  const add = document.getElementById('btn-add')
  const del = document.getElementById('btn-del')
const accordions = document.querySelectorAll('.accordion');


  if (input && prev && add && del ) {
  input.addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        prev.src = e.target.result;
        add.classList.add('hidden')
        del.classList.remove('hidden')
      };
      reader.readAsDataURL(file);
    }
  });

  del.addEventListener('click',function(){
    console.log('path:',defaultAvatar )
    prev.src=defaultAvatar
    input.value=''
    add.classList.remove('hidden')
    del.classList.add('hidden')
  })

}

accordions.forEach(function(quest) {
    const arrow = quest.querySelector('img');

    quest.addEventListener('click', function () {
        const isOpen = quest.classList.contains('is-open');

        if (isOpen) {
            quest.classList.remove('is-open');
            quest.style.maxHeight = '40px';
            arrow.style.transform = 'rotate(0deg)';
        } else {
            quest.classList.add('is-open');
            quest.style.maxHeight = quest.scrollHeight + 'px';
            arrow.style.transform = 'rotate(180deg)';
        }
    });
});
// Counter animation
function animateCount(el, target, duration) {
  let start = 0;
  const step = timestamp => {
    if (!start) start = timestamp;
    const progress = Math.min((timestamp - start) / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3);
    el.textContent = Math.round(eased * target) + '+';
    if (progress < 1) requestAnimationFrame(step);
  };
  requestAnimationFrame(step);
}

// running elementt
const counters = document.querySelectorAll('[data-count]');
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const target = +el.dataset.count;
      const duration = +el.dataset.duration || 2000;
      animateCount(el, target, duration);
      observer.unobserve(el); 
    }
  });
});

counters.forEach(el => observer.observe(el));
