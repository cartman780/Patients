@extends('layouts.layout')

@section('content')                    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Pati&euml;nten</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
            <div class="card">
                <div class="card-body">
                    <div class="text-lg-right">
                        <a href="/patients/add-patient" class="btn btn-success mb-2"><i class="mdi mdi-plus mr-1"></i> Pati&euml;nt toevoegen</a>
                    </div>
                    @can('view', auth()->user())
                        {{ 'WaaZZaaa' }}
                    @endcan
                    <!-- patients table -->
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Naam</th>
                                <th>Geboortedatum</th>
                                <th>Aantal behandelingen</th>
                                <th style="width:200px;">Acties</th>
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
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        
    </div>
    <!-- end row -->
@endsection