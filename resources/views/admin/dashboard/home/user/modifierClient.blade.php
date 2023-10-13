@extends('admin.layouts.base')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{$client->type}}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">{{$client->type}}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Modifier {{$client->type}}</h3>
            </div>
          <!-- /.card-header -->
          @if (count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          
          @endif

          @if (Session::has('status'))
          <br>
          <div class="alert alert-success">
            {{Session::get('status')}}
          </div>
          @endif
          <form method="POST" action="{{url('admin/admin/mise_a_jour_Client/'.$client->id)}}"enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="card-body">
             
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom & Prénoms</label>
                  <input type="text" required name="name" value="{{$client->name}}"class="form-control" id="exampleInputEmail1" placeholder="Entrer Nom & Prénoms">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">email</label>
                  <input type="text" required  name="email" value="{{$client->email}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre email" min="1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Date de naissance</label>
                  <input type="date" required  name="date_de_naissance" value="{{$client->date_de_naissance}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre date de naissance" min="1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Type</label>
                  <input type="text" required  name="type" value="{{$client->type}}"  class="form-control" id="exampleInputEmail1" placeholder="Entrer le type" min="1">
                </div>
              
        
                <div class="form-group">
                  <label for="exampleInputEmail1">Contact</label>
                  <input type="text" required  value="{{$client->contact}}" name="contact" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre contact" min="1">
                </div>
                
        
              <!-- /.card-body -->
              <div class="card-footer">
                <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                <input type="submit" class="btn btn-success" value="Modifier">
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

  @endsection
  @section('scripts')
<!-- DataTables -->

<script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- page script -->

@endsection