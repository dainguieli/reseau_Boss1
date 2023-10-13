@extends('admin.layouts.base')

@section('content')
    <div class="content-wrapper" style="min-height: 2646.44px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Projects</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Projects</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Projects</h3>
                    @if (Session::get('status'))
                        <br>
                        <div class="alert alert-success">
                            {{ Session::get('status') }}
                        </div>
                    @endif

                    <input type="hidden" {{ $increment = 1 }} />
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body p-0" style="display: block;">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    #
                                </th>
                                <th style="width: 20%">
                                    Nom de groupe
                                </th>

                                <th>
                                    Membre actif
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($room as $room)
                                <tr>
                                    <td>
                                        {{ $increment }}
                                    </td>
                                    <td>
                                        <a>
                                            {{ $room->name }}
                                        </a>
                                        <br>
                                        <small>
                                            Creer le {{ $room->created_at }}
                                        </small>
                                    </td>

                                    <td>
                                        {{ $room->active }}
                                    </td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="{{ url('admin/admin/chat/rooms/' . $room->slug) }}">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>

                                <input type="hidden" {{ $increment++ }} />
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </section>

    </div>
@endsection
