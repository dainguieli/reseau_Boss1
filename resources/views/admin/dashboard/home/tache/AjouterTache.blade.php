@extends('admin.layouts.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Utilisateur</h1>
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
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card ">
                            <div class="card-header" style="background: linear-gradient(-45deg, #664650 0%, #664650 100%)">
                                <h3 class="card-title" style="color: aliceblue">Utilisateur</h3>
                            </div>
                            <!-- /.card-header -->
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (Session::has('status'))
                                <br>
                                <div class="alert alert-success">
                                    {{ Session::get('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('admin.register_tache') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">

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
                                    <form action="/search-users" method="POST">
                                        @csrf
                                        <input type="text" id="search-input" name="query" placeholder="Rechercher des utilisateurs...">
                                    </form>
                                
                                    <select id="user-selector">
                                        <option value="">Sélectionnez un utilisateur</option>
                                    </select>
                               
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
                                <!-- /.card-body -->
                                <div class="card-footer"
                                    style="background: linear-gradient(-45deg, #664650 0%, #664650 100%)">
                                    <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                                    <input type="submit" class="btn btn-success"
                                        style="background: linear-gradient(-45deg, #664650 0%, #858081 100%)"
                                        value="Save">
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

    <script>
        $(document).ready(function () {
    $('#search-input').on('input', function () {
        performSearch();
    });

    function performSearch() {
        var query = $('#search-input').val();

        $.ajax({
            url: '/search-users',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                query: query
            },
            success: function (data) {
                // Mettez à jour le sélecteur avec les résultats de la recherche des utilisateurs
                $('#user-selector').empty().append('<option value="">Sélectionnez un utilisateur</option>');

                if (data.users.length > 0) {
                    $.each(data.users, function (index, user) {
                        $('#user-selector').append('<option value="' + user.id + '">' + user.name + '</option>');
                    });
                }
            }
        });
    }
});
$(document).ready(function () {
    // ...

    $('#user-selector').on('change', function () {
        var selectedUserId = $(this).val();

        // Effectuez l'action souhaitée avec l'ID de l'utilisateur sélectionné (par exemple, afficher les détails de l'utilisateur).
        // Vous pouvez effectuer une autre requête AJAX pour récupérer les détails de l'utilisateur si nécessaire.
    });
});

    </script>
@endsection
