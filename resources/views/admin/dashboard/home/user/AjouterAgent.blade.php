@extends('admin.layouts.base')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>agent</h1>
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
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Ajouter agent</h3>
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
            <form method="POST" action="{{ route('register') }}"  enctype="multipart/form-data" >
              @csrf
            
              <div class="card-body">
              
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom & Prénoms</label>
                  <input type="text"  name="name" class="form-control" id="exampleInputEmail1" placeholder="Entrer Nom & Prénoms">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">email</label>
                  <input type="text"   name="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre email" min="1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Adresse</label>
                  <input type="text"   name="adresse" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre Adresse" min="1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Date de naissance</label>
                  <input type="date"   name="date_de_naissance" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre date de naissance" min="1">
                </div>
               
          
         
                <div class="form-group">
                  <label for="exampleInputEmail1">Contact</label>
                  <input type="text"   name="contact" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre contact" min="1">
                </div>
           
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                <input type="submit" class="btn btn-success" value="Save">
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