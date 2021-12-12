@extends('layouts.main')


@section('container')
    <center>
        <h2> Registrasi Patient</h2>
    </center>

    <div class="container" style="min-height: calc(97vh - 96px - 86px)">
        <form action="/createp" method="POST">
            @csrf
        <div class="container mt-4">
                <div class=" col-12 ">
                <div class="col text-start ">
                    <label for="name" class="form-label">Vaccine Id</label>
                    <input type="text" class="form-control" id="vaccinename" style="margin-top: -10px; margin-bottom: 1rem;" readonly>
                </div>
            </div>
    </div>

    <div class="container mt-2">
                <div class=" col-12 ">
                <div class="col text-start ">
                    <label for="name" class="form-label">Patient Name</label>
                    <input type="text" class="form-control" id="vaccinename" style="margin-top: -10px; margin-bottom: 1rem;">
                </div>
            </div>
    </div>

    <div class="container mt-2">
                <div class=" col-12 ">
                <div class="col text-start ">
                    <label for="name" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="vaccinename" style="margin-top: -10px; margin-bottom: 1rem;">
                </div>
            </div>
    </div>


    <div class="container mt-2">
            <div class="mb-3">
        <label for="formFileSm" class="form-label">KTP</label>
        <br>
        <input  class="sm" id="formFileSm" type="file">
        </div>
    </div>

     <div class="container mt-2">
                <div class=" col-12 ">
                <div class="col text-start ">
                    <label for="name" class="form-label">No.hp</label>
                    <input type="text" class="form-control" id="vaccinename" style="margin-top: -10px; margin-bottom: 1rem;">
                </div>
            </div>
    </div>

    <div class="container mt-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>




@endsection
