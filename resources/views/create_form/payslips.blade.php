@php $active = 'payslip' @endphp
@extends('layouts.main')
@section('title', 'Create Payslip')
@section('content')

<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Create Payslip
                    </h4>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form method="post" action="/create_form/loans" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Cut-off Start</label>
                            <input type="date" class="form-control" id="inputEmail4" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Cut-off End</label>
                            <input type="date" class="form-control" id="inputEmail4" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection