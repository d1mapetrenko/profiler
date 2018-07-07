@extends('layouts.app')

@section('content')
<!--<div class="profile mt-5 mb-1">
    <div class="container">
        <div class="pt-4 pb-3 px-4 bg-white shadow-sm mb-4">
            <h2 class="mb-3">Profile settings</h2>
            <form action="{{action('UserController@update')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Profile image</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="avatar" name="avatar">
                            <label class="custom-file-label" for="avatar">Choose file</label>
                        </div>
                    </div>
                    @if ( (!empty($user['avatar'])) && (file_exists(public_path().$user['avatar'])))
                        <img class="img-fluid" src="{{ $user['avatar'] }}" alt="">
                    @else
                        <img class="img-fluid" src="http://via.placeholder.com/500x400" alt="">
                    @endif
                </div>
                <div class="form-group">
                    <label for="bio">Short bio</label>
                    <textarea class="form-control" id="bio" name="bio" rows="5">{{ $user['bio'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea class="form-control" name="about" id="about" rows="5">{{ $user['about'] }}</textarea>
                </div>  
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>-->
<profile-edit v-bind:user='{!! $user->toJson() !!}'></profile-edit>
@endsection
