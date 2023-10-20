@extends('admin.layouts.base')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Administrateur</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Administrateur</li>
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
                                <h3 class="card-title" style="color: aliceblue">Administrateur</h3>
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
                            <form method="POST" action="{{ route('admin.AdminRegisterCreate') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nom & Prénoms</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                            placeholder="Entrer Nom & Prénoms">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">email</label>
                                        <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Entrer votre email" min="1">
                                    </div>
               
        
                               
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Autorisation</label>
                                        <select multiple class="form-control" name="autorisation" id="exampleFormControlSelect2">
                                          <option value="0">Ajouter</option>
                                          <option value="1">Modifier</option>
                                          <option value="3">Supprimer</option>
                                        </select>
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
@endsection
