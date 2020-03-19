@extends('layouts.layout')

@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Pati&euml;nt {{$patient->name}} {{$patient->last_name}} aanpassen.</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/patients">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Voornaam</label>
                                            <input type="text" id="projectname" class="form-control" placeholder="Voornaam" name="name" value="{{ old('name') ?? $patient->name}}">
                                        </div>        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Achternaam</label>
                                            <input type="text" id="projectname" class="form-control" placeholder="Achternaam" name="last_name" value="{{ old('last_name') ?? $patient->last_name}}">
                                        </div>        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="birthday">Geboortedatum</label>
                                    <input type="text" id="projectname" class="form-control" placeholder="24-07-1995" name="birth" value="{{ old('birth') ?? $patient->birth}}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">E-mailadres</label>
                                    <input type="text" id="projectname" class="form-control" placeholder="john.doe@mail.com" name="email" value="{{ old('email') ?? $patient->email}}">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Telefoonnummer</label>
                                    <input type="text" id="projectname" class="form-control" placeholder="0612345678" name="phone" value="{{ old('phone') ?? $patient->phone}}">
                                </div>

                            </div> <!-- end col-->
                            <div class="col-xl-6">
                
                                <div class="form-group">
                                    <label for="extra">Extra informatie (klachten, ...)</label>
                                    <textarea class="form-control" style="min-height:288px;" name="extra" value="{{ old('extra') ?? $patient->extra}}">{{ old('extra') ?? $patient->extra}}</textarea>
                                </div>

                            </div> <!-- end col-->
                        </div>
                        <button class="btn btn-success" type="submit">Pati&euml;nt aanpassen</button>
                        <a href="/patients" class="btn btn-light">Terug naar overzicht</a>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        
    </div>
    <!-- end row -->

</div>
<!-- container -->
@endsection