@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col-md-12">
    @if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="card">
      <div class="card-header">
        <h3>Edit Color
          <a href="{{ url('admin/colors') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
        </h3>
      </div>
      <div class="card-body">
        <form action="{{ url('admin/colors/'.$color->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label for="">Color Name</label>
            <input type="text" name="nama" value="{{ $color->nama }}" class="form-control">
          </div>
          <div class="mb-3">
            <label for="">Color Code</label>
            <input type="text" name="code" value="{{ $color->nama }}" class="form-control">
          </div>
          <div class="mb-3">
            <label for="">Status</label> <br>
            <input type="checkbox" name="status" style="width: 30px; height: 30px;" {{ $color->status ? 'Checked':'' }}> Checked=Hidden, UnChecked=Visible
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary text-white float-end">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection