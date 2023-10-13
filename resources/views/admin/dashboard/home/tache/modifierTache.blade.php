@extends('admin.layouts.base')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tache</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tache</li>
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
          <div class="card">
            <div class="card-header" style="background: linear-gradient(-45deg, #664650 0%, #664650 100%)">
              <h3 class="card-title" style="color: aliceblue">Modifier Tache</h3>
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

            <form method="POST" action="{{ url('admin/admin/mise_a_jour_Tache/'.$tache->id) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Titre</label>
                  <input type="text" value="{{ $tache->title }}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Entrer le titre">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Début</label>
                  <input type="datetime-local" value="{{ $tache->starts_at->format('Y-m-d\TH:i') }}" class="form-control" id="starts_at" name="starts_at" min="1999-06-07T00:00" max="2100-06-14T00:00">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Fin</label>
                  <input type="datetime-local" value="{{ $tache->ends_at->format('Y-m-d\TH:i') }}" class="form-control" id="ends_at" name="ends_at" min="1999-06-07T00:00" max="2100-06-14T00:00">
                </div>

                <div class="form-floating">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea class="form-control" name="description" placeholder="Description" id="floatingTextarea2" style="height: 100px">{{ $tache->description }}</textarea>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer" style="background: linear-gradient(-45deg, #664650 0%, #664650 100%)">
                <input type="submit" class="btn btn-success" style="background: linear-gradient(-45deg, #664650 0%, #858081 100%)" value="Enregistrer">
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6"></div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
