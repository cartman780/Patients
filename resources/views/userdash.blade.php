@extends('layouts.layout')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">

            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
        <div class="card">
            <div class="card-body">
                <a href="/patients" class="btn btn-sm btn-link float-right mb-3">Bekijk alle pati&euml;nten</a>
                <h4 class="header-title mt-2">Laatste pati&euml;nten</h4>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Naam</th>
                                <th>Geboortedatum</th>
                                <th>Aantal behandelingen</th>
                                <th style="width:100px;">Acties</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($user->patients as $patient)
                            <tr>                                
                                <td>{{$patient->name}} {{$patient->last_name}}</td>
                                <td>{{$patient->birth}}</td>
                                <td>{{$patient->treatments->count()}}</td>
                                <td><a href="/patients/{{$patient->id}}" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                    data-placement="top" title=""
                                    data-original-title="Open klantdossier"><i class="uil-arrow-right"></i></a>
                                    <a href="/patients/{{$patient->id}}/edit" class="btn btn-sm btn-success" data-toggle="tooltip"
                                    data-placement="top" title=""
                                    data-original-title="Pas klantdossier aan"><i class="uil-pen"></i></a>
                                    <a href="/patients/{{$patient->id}}/destroy" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                    data-placement="top" title=""
                                    data-original-title="Verwijder klant" onclick="return confirm('Weet je zeker dat je deze klant wilt verwijderen?');"><i class="uil-trash-alt"></i></a>
                                </td>
                            </tr>
                            @empty
                                <td><p>Geen patienten</p></td>
                            @endforelse
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row -->

@endsection