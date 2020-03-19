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
                        <a href="add-user.html" class="btn btn-success mb-2"><i class="mdi mdi-plus mr-1"></i> Gebruiker toevoegen</a>
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
                            <tr>
                                <td>Arko Elsenaar</td>
                                <td>aelsenaar</td>
                                <td>a.elsenaar@situatiewin.nl</td>
                                <td>12</td>
                                <td><a href="#" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                    data-placement="top" title=""
                                    data-original-title="Bewerk gebruiker"><i class="uil-pen"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                    data-placement="top" title=""
                                    data-original-title="Verwijder gebruiker" onclick="return confirm('Weet je zeker dat je deze gebruiker wilt verwijderen?');"><i class="uil-trash-alt"></i></a>
                                </td>
                            </tr>                                              
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