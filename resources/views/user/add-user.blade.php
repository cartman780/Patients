@extends('layouts.layout')

@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Gebruiker toevoegen</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
            <div class="card">
                <div class="card-body">
                    <form action="/users" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="projectname">Naam</label>
                                    <input type="text" name="name" id="projectname" class="form-control" placeholder="Volledige naam">
                                </div>

                                <div class="form-group">
                                    <label for="projectname">E-mailadres</label>
                                    <input type="text" name="email" id="projectname" class="form-control" placeholder="john.doe@mail.com">
                                </div>


                            </div> <!-- end col-->
                            <div class="col-xl-6">
                
                                <div class="form-group">
                                    <label for="projectname">Gebruikersnaam</label>
                                    <input type="text" name="username" id="projectname" class="form-control" placeholder="jdoe">
                                </div>

                                <div class="form-group">
                                    <label for="projectname">Wachtwoord</label>
                                    <input type="password" name="password" id="projectname" class="form-control" placeholder="********">
                                </div>

                            </div> <!-- end col-->
                        </div>

                        <input type="submit" value="Gebruiker toevoegen" class="btn btn-success">
                        <a href="/users" class="btn btn-light">Terug naar overzicht</a>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        
    </div>
    <!-- end row -->

</div>
<!-- container -->
@endsection