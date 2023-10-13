@extends('admin.layouts.base_calandar')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des tache</h1>
                    </div>
                 
                </div>
            </div><!-- /.container-fluid -->
        </section>


        <div class="container">
            <div id="calendar"></div>
        </div>

    </div>
@endsection
