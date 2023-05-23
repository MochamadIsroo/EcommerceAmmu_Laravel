@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Edit Category
          <a href="{{ url('admin/category') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
        </h3>
      </div>
      <div class="card-body">
        <form action="{{ url('admin/category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="">Nama</label>
              <input type="text" name="nama" value="{{ $category->nama }}" class="form-control">
              @error('nama') <small class="text-danger">{{$message}}</small> @enderror
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Slug</label>
              <input type="text" name="slug" value="{{ $category->slug }}" class="form-control">
              @error('slug') <small class="text-danger">{{$message}}</small> @enderror
            </div>
            <div class="col-md-12 mb-3">
              <label for="">Deskripsi</label>
              <textarea name="deskripsi" class="form-control" rows="3">{{ $category->deskripsi }}</textarea>
              @error('deskripsi') <small class="text-danger">{{$message}}</small> @enderror
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Image</label>
              <input type="file" name="image" class="form-control mb-1">
              <img src="{{ asset('/uploads/category/'.$category->image) }}" width="100px" height="100px" class="me-4 border p-1" alt="">
              @error('image') <small class="text-danger">{{$message}}</small> @enderror
            </div>
            <div class="col-md-6 mb-3">
              <label for="">Status</label><br>
              <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked':'' }}>
              @error('status') <small class="text-danger">{{$message}}</small> @enderror
            </div>

            <div class="col-md-12 mb-3">
              <h4>SEO Tags</h4>
            </div>
            <div class="col-md-12 mb-3">
              <label for="">Meta Title</label>
              <input type="text" name="meta_title" class="form-control" value="{{ $category->meta_title }}">
              @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
            </div>
            <div class="col-md-12 mb-3">
              <label for="">Meta Keyword</label>
              <textarea name="meta_keyword" class="form-control" rows="3">{{ $category->meta_keyword }}</textarea>
              @error('meta_keyword') <small class="text-danger">{{$message}}</small> @enderror
            </div>
            <div class="col-md-12 mb-3">
              <label for="">Meta Deksripsi</label>
              <textarea name="meta_deskripsi" class="form-control" rows="3">{{ $category->meta_deskripsi }}</textarea>
              @error('meta_deskripsi') <small class="text-danger">{{$message}}</small> @enderror
            </div>

            <div class="col-md-12 mb-3">
              <button type="submit" class="btn btn-primary text-white float-end">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection