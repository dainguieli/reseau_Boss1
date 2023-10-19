@extends('admin.layouts.base')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Liste des tache</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">tache</li>
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
                    <div class="card" style="background: linear-gradient(-45deg, #664650 0%, #d8c3ca 100%)">
                        <div class="card-header">
                            <h3 class="card-title">Tous les taches</h3>
                        </div>
                        @if (Session::get('status'))
                        <br>
                        <div class="alert alert-success">
                            {{ Session::get('status') }}
                        </div>
                        @endif

                        <input type="hidden" {{ $increment=1 }} />
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Num.</th>

                                        <th>title</th>
                                        <th>couleur</th>

                                        <th>debut</th>
                                        <th>fin</th>
                                        <th>Descriptionss</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($taches as $tache)
                                    <tr>
                                        <td>{{ $increment }}</td>

                                        <td>{{ $tache->title }}</td>
                                        <td>{{ $tache->colour }}</td>


                                        <td>{{ $tache->starts_at }}</td>
                                        <td>{{ $tache->ends_at }}</td>


                                        <td>{{ $tache->description }}</td>



                                        <td>

                                            <a href="{{ url('admin/admin/infoTache/' . $tache->id) }}"
                                                class="btn btn-primary"><i class="nav-icon fa fa-eye"></i></a>
                                            <a href="{{ url('admin/admin/modifierTache/' . $tache->id) }}"
                                                class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>

                                            <a href="#" onclick="$(this).parent().find('form').submit()" id="delete"
                                                class="btn btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                                            <form action="{{ url('admin/admin/supprimerTache/' . $tache->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </form>
                                        </td>


                                    </tr>
                                    <input type="hidden" {{ $increment++ }} />
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
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>


<script>
    $(function() {
            var table = $("#example").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            })
            table.buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
            $('#example1').DataTable({
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