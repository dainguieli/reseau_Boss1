@extends('layouts.base')

@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profil</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item active">Profil de l'utilisateur</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle admin_picture" src="{{ Auth::user()->picture }}" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center admin_name">{{Auth::user()->name}}</h3>

              <p class="text-muted text-center">Admin</p>

              <input type="file" name="admin_image" id="admin_image" style="opacity: 0;height:1px;display:none">
              <a href="javascript:void(0)" class="btn btn-primary btn-block" id="change_picture_btn"><b>Changer l'image</b></a>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Informations personnelles</a></li>
                <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Changer le mot de passe</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="personal_info">
                  <form class="form-horizontal" method="POST" action="{{ route('adminUpdateInfo') }}" id="AdminInfoForm">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Nom & Prémon</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="name" value="{{ Auth::user()->name }}" name="name">

                        <span class="text-danger error-text name_error"></span>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Date de naissance</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputName" placeholder="date_de_naissance" value="{{ Auth::user()->date_de_naissance }}" name="name">

                        <span class="text-danger error-text name_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="{{ Auth::user()->email }}" name="email">
                        <span class="text-danger error-text email_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Contact</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2" placeholder="Couleur préférée" value="{{ Auth::user()->favoriteColor }}" name="favoritecolor">
                        <span class="text-danger error-text favoritecolor_error"></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Enregistrer les modifications</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="change_password">
                    <form class="form-horizontal" action="{{ route('adminChangePassword') }}" method="POST" id="changePasswordAdminForm">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Ancien mot de passe</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputName" placeholder="Entrez le mot de passe actuel" name="oldpassword">
                          <span class="text-danger error-text oldpassword_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Nouveau mot de passe</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="newpassword" placeholder="Entrez le nouveau mot de passe" name="newpassword">
                          <span class="text-danger error-text newpassword_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Confirmer le nouveau mot de passe</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="cnewpassword" placeholder="Saisissez à nouveau le nouveau mot de passe" name="cnewpassword">
                          <span class="text-danger error-text cnewpassword_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Mise à jour du mot de passe</button>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
</div>
 
      <!-- /.content -->










      @endsection
