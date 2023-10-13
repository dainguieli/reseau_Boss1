@extends('admin.layouts.base')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      @if (Session::has('error'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{session::get('error')}}</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background: linear-gradient(-45deg, #a06f7f 0%, #c09fa9 100%)">
              <div class="inner">
                <h3>150</h3>
 
                <p>Tâche Términer</p>
              </div>
              <div class="icon">
                <i class="ion bi bi-file-earmark-check-fill"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box " style="background: linear-gradient(-45deg, #a06f7f 0%, #857b7e 100%)">
              <div class="inner">
                <h3>{{count($users)}}<sup style="font-size: 20px"></sup></h3>
 
                <p>Totale d'utilisateur</p>
              </div>
              <div class="icon">
                      <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box " style="background: linear-gradient(-45deg, #a06f7f 0%, #793247 100%)">
              <div class="inner">
                <h3>{{count($taches)}} <sup style="font-size: 20px"></sup></h3>
 
                <p>Totale de Tâche</p>
              </div>
              <div class="icon">
                <i class="ion bi bi-list-task"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box " style="background: linear-gradient(-45deg, #a06f7f 0%, #dd6085 100%)">
              <div class="inner">
                <h3>65</h3>
 
                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
    
    </section>
    <!-- /.content -->
  </div>
@endsection
