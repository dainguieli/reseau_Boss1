<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Calendrir') }}
        </h2>
    </x-slot>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" >
          <div class="modal-content" style="background: rgb(104, 57, 57)" >
            <div class="modal-header">
              <b><h5 class="modal-title" style="size: 20px"  style="color: beige" id="exampleModalLabel">Tache</h5></b>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <label for="recipient-name" class="col-form-label" style="color: beige">Id:</label>
              <input type="text" id="eventIdInput" class="form-control" style="color: beige;background: none;border: none" disabled >
            
            </div>
             <div class="modal-body">
              <label for="recipient-name" class="col-form-label" style="color: beige">Title:</label>
              <input type="text" id="eventTitleInput" class="form-control" style="color: beige;background: none;border: none" disabled>
         
            </div> 
             <div class="modal-body">
              <label for="recipient-name" class="col-form-label" style="color: beige">Description:</label><br>
              <textarea name="" id="eventDescriptionInput" cols="55" style="color: beige;background: none;border: none" disabled></textarea>
              
            </div>
        
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id='calendar'></div>
        </div>
    </div>


</x-app-layout>