@extends('admin.layouts.base')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Liste des agent</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">agent</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tous les agents</h3>
            </div>
            @if (Session::get('status'))
            <br>
            <div class="alert alert-success">
              {{Session::get('status')}}
            </div>
            @endif

            <input type="hidden" {{$increment=1}}/>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Num.</th>
                  <th>Photo d'identité</th>
                  <th>Nom & Prénoms</th>
                  <th>Email</th>
                  <th>Date de naissance</th>
                 
                  <th>Contact</th>
                  <th>Adresse</th>
                  
            
               
         
            
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($agents as $agent)
                         <tr>
                  <td>{{$increment}}</td>
                  <td>
                    <img src="{{asset('storage/photo_identité/'.$agent->profile_photo_path)}}" style="height : 50px; width : 50px" class="img-circle elevation-2" alt="User Image">
                  </td>
                  <td>{{$agent->name}}</td>
                  <td>{{$agent->email}}</td>
                  <td>{{$agent->date_de_naissance}}</td>
                
                  <td>{{$agent->contact}}</td>
                  <td>{{$agent->adresse}}</td>
              

 
           
           
                  <td>
                  <!--
                    @if ($agent->status==1)
                    <form action="{{url('admin/desactiveagent/'.$agent->id)}}" method="POST">
                      @csrf
                      @method('PUT')
                      <input type="submit" class="btn btn-success" value="Désactive">
                    </form>
                    @else
                    <form action="{{url('admin/activeagent/'.$agent->id)}}" method="POST">
                      @csrf
                      @method('PUT')
                      <input type="submit" class="btn btn-warning" value="Activé">
                    </form>
                  -->
                    @endif
                    <a href="{{url('admin/admin/addpoint/'.$agent->id)}}" class="btn btn-success"><i class="nav-icon fas fa-plus"></i></a>
                    <a href="{{url('admin/admin/modifieragent/'.$agent->id)}}" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                
                    <a href="#" onclick="$(this).parent().find('form').submit()" id="delete" class="btn btn-danger" ><i class="nav-icon fas fa-trash"></i></a>
                    <form action="{{url('admin/admin/supprimeragent/'.$agent->id)}}" method="post">
                      @csrf 
                      @method('DELETE') 
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                  </td>
              
        
                  </tr>
                  <input type="hidden" {{$increment++}}/>
      @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection

@section('scripts')
<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
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