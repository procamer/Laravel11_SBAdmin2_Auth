@extends('admin.layouts.app')
@section('title','Profile')
@section('header', __('Profile'))

@section('content')
    @include('notification')
    <div class="row">
        <div class="col-md-6">
            <!-- Profile Information -->
            @include('admin.profile.update-profile-information-form')
        </div>
        <div class="col-md-6">
            <!-- Update Password -->
            @include('admin.profile.update-password-form')
            @include('admin.profile.delete-user-form')
        </div>
    </div>
@endsection
