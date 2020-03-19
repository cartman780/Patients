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
                    <a href="/patients/{{$patient->id}}/treatments/{{$treatment->id}}/edit-treatment" class="btn btn-success mb-2"><i class="mdi mdi-plus mr-1"></i> Bewerk behandeling</a>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mt-0 mb-3">
                            Pijn van deze pati&euml;nt
                        </h4>

                        <table class="table table-sm">
                            <tr>
                                <th>Rug</th>
                                <td>{{$treatment->back}}</td>
                            </tr>
                            <tr>
                                <th>Armen</th>
                                <td>{{$treatment->legs}}</td>
                            </tr>
                            <tr>
                                <th>Benen</th>
                                <td>{{$treatment->arms}}</td>
                            </tr>
                            <tr>
                                <th>Kont</th>
                                <td>{{$treatment->ass}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mt-0 mb-3">
                            Extra informatie
                        </h4>

                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Extra</th>
                                </tr>
                            </thead>
                            <tbody>  
                                <tr>
                                    <td>{{$treatment->extra}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
    
</div>
<!-- end row -->
@endsection