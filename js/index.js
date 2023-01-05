const d = document,
      $main = d.querySelector('.contenedor');

const paginas = async (url) =>{
   try {
      let respuesta = await fetch(url);
      let text = await respuesta.text();
      $main.innerHTML = text;

   } catch (err) {
      console.log(err)
   }
}


d.addEventListener('click', e =>{
   e.preventDefault();
   if(e.target.matches('.centro a') || e.target.matches('#recuperarPass .inicio a')){
      paginas(e.target.href);
   }
})