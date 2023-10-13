@extends('admin.layouts.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des taches</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Taches</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="container">

            @foreach ($taches as $tache)
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">{{ $tache->title }}</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-1 text-muted">Utilisateurs associés :</h6>
                        <ul class="list-group" >
                            @foreach ($users[$tache->id] as $user)
                                <li class="list-group-item">{{ $user->name }}:{{ $user->type }}: <a href="#"
                                        onclick="$(this).parent().find('form').submit()" id="delete"><i
                                            class="nav-icon fas fa-trash" style="color: brown"></i></a>
                                    <form action="{{ url('admin/admin/supprimerAjouteTache/' . $tache->id . '/' . $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Debut</th>
                                    <th scope="col">Fin</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $tache->title }}</td>
                                    <td>{{ $tache->starts_at }}</td>
                                    <td>{{ $tache->ends_at }}</td>
                                    <td>{{ $tache->description }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach

            <div class="card-body">
                @if (Session::has('status'))
                    <br>
                    <div class="alert alert-success">
                        {{ Session::get('status') }}
                    </div>
                @endif

                <input type="hidden" {{ $increment = 1 }} />

                <div class="card-body">
                    <table id="example" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Num.</th>
                                <th>Nom & Prénoms</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listUser as $listUser)
                                <tr>
                                    <td>{{ $increment }}</td>
                                    <td>{{ $listUser->name }}</td>
                                    <td>{{ $listUser->type }}</td>
                                    <td> <a href="{{ url('admin/admin/utilisateurAjouteTache/' . $id . '/' . $listUser->id) }}"
                                            class="btn btn-secondary">
                                            <i class="nav-icon fa fa-tasks fa-sm"></i>
                                        </a>

                                    </td>
                                </tr>
                                <input type="hidden" {{ $increment++ }} />
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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

            });
            table.buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
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
