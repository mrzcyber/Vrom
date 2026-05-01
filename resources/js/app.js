  // alpine js
  import Alpine from 'alpinejs'

  window.Alpine = Alpine
  Alpine.start()

  // aos library
  import AOS from 'aos'
import 'aos/dist/aos.css'

AOS.init({ once: true, duration: 300 })


// main content

  const input = document.getElementById('photo')
  const prev = document.getElementById('preview')
  const add = document.getElementById('btn-add')
  const del =document.getElementById('btn-del')

  
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
