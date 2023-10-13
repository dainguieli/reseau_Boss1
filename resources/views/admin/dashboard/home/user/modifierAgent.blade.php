@extends('admin.layouts.base')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Client</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Client</li>
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
              <h3 class="card-title">Modifier Client</h3>
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
                <label for="exampleInputFile">Photo d'identité</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input  type="file" name="photo_identité" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
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
                  <label for="exampleInputEmail1">Lieu de naissance</label>
                  <input type="text" required  name="lieu_de_naissance" value="{{$client->lieu_de_naissance}}"  class="form-control" id="exampleInputEmail1" placeholder="Entrer votre lieu de naissance" min="1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Profession</label>
                  <input type="text" required  name="profession" value="{{$client->profession}}"  class="form-control" id="exampleInputEmail1" placeholder="Entrer votre profession" min="1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Lieu de profession</label>
                  <input type="text" required value="{{$client->lieu_de_profession}}" name="lieu_de_profession" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre lieu de profession" min="1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Contact</label>
                  <input type="text" required  value="{{$client->contact}}" name="contact" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre contact" min="1">
                </div>
                
                <div class="form-group">
                  <label>piece</label>
                  <select  name="piece" class="form-control select2" style="width: 100%;">
                    <option selected="selected" value="{{$client->piece}}">{{$client->piece}}</option>
                    <option value="CNI">CNI</option>
                    <option value="PASSPORT">PASSPORT</option>
                

                  </select>
                </div>
                <label for="exampleInputFile">Photo recto de la pice d'identité</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input  type="file"  name="photo_retro_piece" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
                <label for="exampleInputFile">Photo veso de la pice d'identité</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input  type="file"  name="photo_veso_piece" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Numero de piece</label>
                  <input type="text" required  value="{{$client->numero_de_piece}}" name="numero_de_piece" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre contact" min="1">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Lieu_de_etablissement</label>
                  <input type="text" required value="{{$client->lieu_de_etablissement}}" name="lieu_de_etablissement" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre contact" min="1">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">date de l'etablissement</label>
                  <input type="date" required  value="{{$client->date_de_etablissement}}" name="date_de_etablissement" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre contact" min="1">
                </div>
                  
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