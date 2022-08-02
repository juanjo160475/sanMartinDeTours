
 <script>
       //EJEMPLO DE COMO LLENAR EL FORMULARIO CURSOS 
        // se oculta el header
        const cabecera = document.body.querySelector('#mainNav');
        cabecera.style.display = 'none' 
        
</script>
    
<div class="container text-center">
     <div class="row">
                <div class="col">
                  
                   <!--img src="imagenes\inicio\cripto" class="img-thumbnail" alt="error de carga"-->
               
                 </div>
                
                 <div class="col">
                                          <p>
                                   <input type="radio" name="status" value="interesado" id="interesado"> <label for="interesado">Estoy interesado</label> 
                                   <br>
                                   <input type="radio" name="status" value="indeciso" id="indeciso"> <label for="indeciso">Estoy indeciso</label> 
                                   <br>
                                   <input type="radio" name="status" value="no_interesado" id="no_interesado"> <label for="no_interesado">No me interesa</label> 
                            </p>
                            <button id="mostrar">Mostrar opción activa</button>
                            <button id="setear">Setear activo al valor "interesado"</button>

                            <script>
                                   document.getElementById('mostrar').addEventListener('click', function() {
                                   // let valorActivo = document.querySelector('input[name="status"]:checked').value; // Esto tiene el problema de que puede que un elemento no esté activo, entonces no se podría acceder al value de un null, lo que sería un error en tiempo de ejecución
                                   let elementoActivo = document.querySelector('input[name="status"]:checked');
                                   if(elementoActivo) {
                                          alert(elementoActivo.value);
                                   } else {
                                          alert('No hay ninún elemento activo');
                                   }
                                   });

                                   document.getElementById('setear').addEventListener('click', function() {
                                   setRadio('status', 'interesado')
                                   });

                                   function setRadio(name, value) {
                                   document.querySelectorAll(`input[name="${name}"]`).forEach(element => {
                                          if(element.value === value) {
                                          element.checked = true;
                                          }
                                   });
                                   }
                            </script>
                   </div>
         </div>
 </div>
