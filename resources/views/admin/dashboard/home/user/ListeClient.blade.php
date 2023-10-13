@extends('admin.layouts.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des Utilisateur</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Utilisateur</li>
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
                                <h3 class="card-title">Tous les Utilisateur</h3>
                            </div>
                            @if (Session::get('status'))
                                <br>
                                <div class="alert alert-success">
                                    {{ Session::get('status') }}
                                </div>
                            @endif

                            <input type="hidden" {{ $increment = 1 }} />
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Num.</th>
                                            <th>Photo d'identité</th>
                                            <th>Nom & Prénoms</th>
                                            <th>Email</th>
                                            <th>Date de naissance</th>
                                            <th>Type</th>
                                            <th>Contact</th>
                                            <th>Adresse</th>





                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client)
                                            <tr>
                                                <td>{{ $increment }}</td>
                                                <td>

                                                    <img src="{{ asset('storage/' . $client->profile_photo_path) }}"
                                                        style="height : 50px; width : 50px" class="img-circle elevation-2"
                                                        alt="User Image">
                                                </td>
                                                <td>{{ $client->name }}</td>
                                                <td>{{ $client->email }}</td>
                                                <td>{{ $client->date_de_naissance }}</td>
                                                <td>{{ $client->type }}</td>
                                                <td>{{ $client->contact }}</td>
                                                <td>{{ $client->adresse }}</td>





                                                <td>
                                                    <!--
                        @if ($client->status == 1)
    <form action="{{ url('admin/desactiveClient/' . $client->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <input type="submit" class="btn btn-success" value="Désactive">
                        </form>
@else
    <form action="{{ url('admin/activeClient/' . $client->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <input type="submit" class="btn btn-warning" value="Activé">
                        </form>
                      -->
                                        @endif

                                        <a href="{{ url('admin/admin/createClient/' . $client->id) }}" data-toggle="modal"
                                            data-target="#exampleModal"class="btn btn-secondary"><i
                                                class="nav-icon fa fa-tasks fa-sm"></i></a>
                                        <a href="{{ url('admin/admin/infoBenevole/' . $client->id) }}"
                                            class="btn btn-primary"><i class="nav-icon fa fa-eye fa-sm"></i></a>
                                        <a href="{{ url('admin/admin/modifierClient/' . $client->id) }}"
                                            class="btn btn-primary"><i class="nav-icon fas fa-edit fa-sm"></i></a>

                                        <a href="#" onclick="$(this).parent().find('form').submit()" id="delete"
                                            class="btn btn-danger"><i class="nav-icon fas fa-trash fa-sm"></i></a>
                                        <form action="{{ url('admin/admin/supprimerClient/' . $client->id) }}"
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


                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tâche</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ url('admin/admin/createClient/' . $client->id) }}">
                                                        @csrf
                                                        <div class="form-group">
                                                          <label for="exampleInputEmail1">title</label>
                                                          <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                                              placeholder="Entrer title">
                                                      </div>
                  
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Debut</label>
                             
                                                          <input type="datetime-local" class="form-control" id="starts_at" name="starts_at"
                                                          min="1999-06-07T00:00" max="2100-06-14T00:00" min="1"/>
                                                      </div>
                  
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Fin</label>
                                                      
                                                              <input type="datetime-local" class="form-control" id="ends_at" name="ends_at"
                                                               min="1999-06-07T00:00" max="2100-06-14T00:00" min="1"/>
                                                      </div>
                                          
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Couleur</label>
                                                        <input type="color" name="colour" class="form-control"
                                                            id="exampleInputEmail1" placeholder="Entrer votre Couleur préférée"
                                                            min="1" style="width: 10%;">
                                                    </div>
                
                
                                                    <div class="form-floating">
                                                      <label for="exampleInputEmail1">Description</label>
                                                      <textarea class="form-control" name='description'placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>
                                                     
                                                    </div>
                
                                              
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Send message</button>
                                                </div>
                                              </form>
                                            </div>
                                        </div>
                                    </div>

                                    <tfoot>
                                        <tr>
                                            <th>Num.</th>
                                            <th>Photo d'identité</th>
                                            <th>Nom & Prénoms</th>
                                            <th>Email</th>
                                            <th>Date de naissance</th>
                                            <th>Type</th>
                                            <th>Contact</th>
                                            <th>Adresse</th>
                                            <th>Action</th>
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
