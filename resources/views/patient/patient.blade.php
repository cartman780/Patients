@extends('layouts.layout')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Pati&euml;nt: {{$patient->name}} {{$patient->last_name}}</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
        <div class="card">
            <div class="card-body">
                <div class="text-lg-right">
                    <a href="/patients/{{$patient->id}}/treatments/add-treatment" class="btn btn-success mb-2"><i class="mdi mdi-plus mr-1"></i> Nieuwe behandeling</a>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mt-0 mb-3">
                            Over deze pati&euml;nt
                        </h4>

                        <table class="table table-sm">
                            <tr>
                                <th>Naam</th>
                                <td>{{$patient->name}} {{$patient->last_name}}</td>
                            </tr>
                            <tr>
                                <th>Geboortedatum</th>
                                <td>{{$patient->birth}}</td>
                            </tr>
                            <tr>
                                <th>E-mailadres</th>
                                <td>{{$patient->email}}</td>
                            </tr>
                            <tr>
                                <th>Telefoonnummer</th>
                                <td>{{$patient->phone}}</td>
                            </tr>
                            <tr>
                                <th>Extra inforamtie</th>
                                <td>{{$patient->extra}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mt-0 mb-3">
                            Behandelingen
                        </h4>

                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Datum</th>
                                    <th style="width:150px;">Acties</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            @forelse($patient->treatments as $treatment)
                                <tr>
                                    <td>{{$treatment->created_at}}</td>
                                    <td>
                                        <a href="/patients/{{$patient->id}}/treatments/{{$treatment->id}}" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                        data-placement="top" title=""
                                        data-original-title="Open behandeling"><i class="uil-arrow-right"></i></a>
                                        <a href="/patients/{{$patient->id}}/treatments/{{$treatment->id}}/destroy" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                        data-placement="top" title=""
                                        data-original-title="Verwijder behandeling" onclick="return confirm('Weet je zeker dat je deze behandeling wilt verwijderen?');"><i class="uil-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr><td><p>Nog geen behandelingen voor deze pati&euml;nt.</p></td></tr>                   
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <hr> <!-- devider -->

                <div class="row">
                    
                    @foreach ($newArray as $type => $scores)
                    <div class="col-3">
                        <h4>{{ $type }}</h4>
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Datum</th>
                                    <th>Score</th>
                                </tr>
                            </thead>
                            <tbody>                            
                            @forelse($scores as $score)
                                <tr>
                                    <td>{{$score['date']->format('d-m-Y')}}</td>
                                    <td style="color:{{$score['color']}}">{{$score['score']}}</td>
                                </tr>
                            @empty
                                <tr><td><p>Nog geen behandelingen voor deze pati&euml;nt.</p></td></tr>                   
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    @endforeach

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
    
</div>
<!-- end row -->
@endsection