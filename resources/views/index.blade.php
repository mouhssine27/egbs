@extends('layouts.master')

@section('content')
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>Success !</strong> {{ session('success') }}
                    </div>
                    @endif
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-success mb-2" data-toggle="modal"
                            data-target="#addUser">Ajouter</button>
                    </div>
                    @include('partials.popup.addUser')
                    <div class="widget-content widget-content-area br-6">
                        <table id="zero-config" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Age</th>
                                    <th>Date Birdthay</th>
                                    <th>Actions</th>

                                   
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ( $utilisateurs as $utilisateur )
                             <tr>
                                <td>{{ $utilisateur->username }}</td>
                             
                                <td>{{ $utilisateur->age }}</td>
                                
                                <td>{{ $utilisateur->date_of_birth }}</td>

                                <td>
                                    <button><a data-toggle="modal"data-target="#detailsUser{{ $utilisateur->id }}">details</a> </button>
                                    <button><a data-toggle="modal"data-target="#updateUser{{ $utilisateur->id }}">modifier</a> </button>
                                    <button><a data-toggle="modal"data-target="#deleteUser{{ $utilisateur->id }}">supprimer</a> </button>
                                </td>
                            </tr>
                            @include('partials.popup.detailsUser',['utilisateurId'=>$utilisateur->id])
                            @include('partials.popup.deleteUser',['utilisateurId'=>$utilisateur->id])
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
