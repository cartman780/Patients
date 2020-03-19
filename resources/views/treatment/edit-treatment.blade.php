@extends('layouts.layout')

@section('content')
<!-- Start Content-->
<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Behandeling {{$patient->name}} {{$patient->last_name}} bijwerken.</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
        <div class="card">
            <div class="card-body">
                <form action="/patients/{{$patient->id}}/treatments/{{$treatment->id}}" method="POST">
                @csrf
                @method('PUT')
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="projectname">Pijn in de rug</label>
                                
                                <select name="back" class="form-control">
                                    @for ($i = 1; $i < 11; $i++)
                                        <option value="{{$i}}" 
                                            @if($i == $treatment->back)
                                                selected
                                            @endif
                                        >{{$i}}</option> 
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectname">Pijn in de benen</label>
                                
                                <select name="legs" class="form-control">
                                    @for ($i = 1; $i < 11; $i++)
                                        <option value="{{$i}}" 
                                            @if($i == $treatment->legs)
                                                selected
                                            @endif
                                        >{{$i}}</option> 
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectname">Pijn in de armen</label>
                                
                                <select name="arms" class="form-control">
                                    @for ($i = 1; $i < 11; $i++)
                                        <option value="{{$i}}" 
                                            @if($i == $treatment->arms)
                                                selected
                                            @endif
                                        >{{$i}}</option> 
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="projectname">Pijn in je kont</label>
                                
                                <select name="ass" class="form-control" value="{{ old('back') ?? $treatment->ass }}">
                                    @for ($i = 1; $i < 11; $i++)
                                        <option value="{{$i}}" 
                                            @if($i == $treatment->ass)
                                                selected
                                            @endif
                                        >{{$i}}</option> 
                                    @endfor
                                </select>
                            </div>
                        </div> <!-- end col-->
                        <div class="col-xl-6">
            
                            <div class="form-group">
                                <label for="projectname">Extra informatie (klachten, ...)</label>
                                <textarea class="form-control" name="extra" style="min-height:288px;" value="{{ old('extra' ) ?? $treatment->extra}}">{{ old('extra' ) ?? $treatment->extra}}</textarea>
                            </div>
                        </div> <!-- end col-->
                    </div>
                    <button class="btn btn-success" type="submit">Behandeling toevoegen</button>
                    <a href="/patients/{{$patient->id}}" class="btn btn-light">Terug naar patient</a>
                </form>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
                            
</div>
<!-- end row -->

</div>
<!-- container -->
@endsection