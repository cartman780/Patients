@extends('layouts.layout')

@section('content')
<!-- Start Content-->
<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Nieuwe behandeling bij {{$patient->name}} {{$patient->last_name}}</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
        <div class="card">
            <div class="card-body">
                <form action="/patients/{{$patient->id}}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="projectname">Pijn in de rug</label>
                                
                                <select name="back" class="form-control" value="{{ old('back')}}">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectname">Pijn in de benen</label>
                                
                                <select name="legs" class="form-control" value="{{ old('legs')}}">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectname">Pijn in de armen</label>
                                
                                <select name="arms" class="form-control" value="{{ old('arms')}}">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectname">Pijn in je kont</label>
                                
                                <select name="ass" class="form-control" >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div> <!-- end col-->
                        <div class="col-xl-6">
            
                            <div class="form-group">
                                <label for="projectname">Extra informatie (klachten, ...)</label>
                                <textarea class="form-control" name="extra" style="min-height:288px;"value="{{ old('extra')}}"></textarea>
                            </div>
                        </div> <!-- end col-->
                    </div>
                    <button class="btn btn-success" type="submit">Behandeling toevoegen</button>
                    <a href="/patients/{{$patient->id}}" class="btn btn-light">Terug naar klant</a>
                </form>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
                            
</div>
<!-- end row -->

</div>
<!-- container -->
@endsection