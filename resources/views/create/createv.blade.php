@extends('layouts.main')


@section('container')
    <center>
        <h2> Insert Vaccine</h2>
    </center>

    <div class="container" style="min-height: calc(98vh - 97px - 87px)">
        <div class="container mt-4">
        <form class="col" action="/createv" method="POST">
                <div class=" col-12 ">
                <div class="col text-start ">
                    <label for="name" class="form-label">Vaccine Name</label>
                    <input type="text" class="form-control" id="vaccinename" style="margin-top: -10px; margin-bottom: 1rem;">
                </div>
            </div>
    </div>

    <div class="container mt-2">
        <label for="name" class="form-label">Price</label>
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">RP</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1">
            </div>
    </div>

    <div class="container mt-2">
        <label for="floatingTextarea2">Descripton</label>
        <div class="form-floating">
        <textarea class="form-control"  id="floatingTextarea2" style="height: 95px">
        </textarea>
        </div>
    </div>

    <div class="container mt-2">
            <div class="mb-3">
        <label for="formFileSm" class="form-label">Image</label>
        <br>
        <input  class="sm" id="formFileSm" type="file">
        </div>
    </div>

    <div class="container mt-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>



@endsection
