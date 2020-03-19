@extends('layouts.layout')

@section('content')                  
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Gebruikers</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
            <div class="card">
                <div class="card-body">
                    <div class="text-lg-right">
                        <a href="/users/add-user" class="btn btn-success mb-2"><i class="mdi mdi-plus mr-1"></i> Gebruiker toevoegen</a>
                    </div>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Naam</th>
                                <th>Gebruikersnaam</th>
                                <th>E-mailadres</th>
                                <th>Aantal pati&euml;nten</th>
                                <th style="width:150px;">Acties</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($users as $u)
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">{{$u->name}} {{$u->lastname}}</h5>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">{{$u->username}}</h5>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">{{$u->email}}</h5>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">{{$u->patients->count()}}</h5>
                                </td>
                                <td>
                                    <a href="/users/{{$u->id}}/edit" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                    data-placement="top" title=""
                                    data-original-title="Bewerk gebruiker"><i class="uil-pen"></i></a>
                                    <a href="/users/{{$u->id}}/destroy" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                    data-placement="top" title=""
                                    data-original-title="Verwijder gebruiker" onclick="return confirm('Weet je zeker dat je deze gebruiker wilt verwijderen?');"><i class="uil-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach                                   
                        </tbody>
                    </table>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        
    </div>
    <!-- end row -->

</div>
<!-- container -->
@endsection