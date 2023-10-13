@extends('admin.layouts.base')
@section('title')
Silder
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sliders</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Sliders</li>
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
              <h3 class="card-title">All Sliders</h3>
            </div>
            @if (Session::get('status'))
            <br>
            <div class="alert alert-success">
              {{Session::get('status')}}
            </div>
            @endif
            <input type="hidden" {{$increment=1}} />
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Num.</th>
                    <th>Images</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($silders as $silder)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                      @foreach (json_decode($silder->image) as $imageName)
                      <img src="{{ asset('storage/slider_images/' . $imageName) }}"
                           style="height: 50px; width: 50px"
                           class="img-circle elevation-2" alt="Slider Image">
                      @endforeach
                    </td>
                    <td>{{$silder->titre}}</td>
                    <td>{{$silder->description}}</td>
                    <td>
                      @if ($silder->status == 1)
                      <form action="{{ url('admin/desactiveSlider/'.$silder->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="submit" class="btn btn-success" value="Désactiver">
                      </form>
                      @else
                      <form action="{{ url('admin/activeSlider/'.$silder->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="submit" class="btn btn-warning" value="Activer">
                      </form>
                      @endif
              
                      <a href="{{ url('admin/modifierSilder/'.$silder->id) }}" class="btn btn-primary">
                        <i class="nav-icon fas fa-edit"></i>
                      </a>
                      <a href="#" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">
                        <i class="nav-icon fas fa-trash"></i>
                      </a>
                      <form action="{{ url('admin/supprimerSilder/'.$silder->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Num.</th>
                    <th>Images</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
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
<!-- /.content-wrapper -->
@endsection
@section('scripts')
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('frontend/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('frontend/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- AdminLTE App -->
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
@endsection