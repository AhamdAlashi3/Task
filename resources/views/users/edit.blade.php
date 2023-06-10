@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Profile') }}</div>

                <div class="card-body">
                    {{-- @include('partials.errors') --}}
                   <form action="={{ route('users.update-profile') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="from-group">
                        <label for="name">Name</label>
                        <input type="text" class="from-control" name="name" id="name" value="{{ $user->name }}">
                    </div>

                    <div class="from-group">
                        <label for="about">About me</label>
                        <textarea name="about" id="about" cols="5" rows="10" class="form-control">{{ $user->about }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>

                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
