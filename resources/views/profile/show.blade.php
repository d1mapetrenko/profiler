@extends('layouts.app')

@section('content')
<div class="profile mt-5 mb-1">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-image p-2 bg-white shadow-sm mb-4">
                    @if ( (!empty($user['avatar'])) && (file_exists(public_path().$user['avatar'])))
                        <img class="img-fluid" src="{{ $user['avatar'] }}" alt="">
                    @else
                        <img class="img-fluid" src="http://via.placeholder.com/500x400" alt="">
                    @endif
                </div>
            </div>
            <div class="col-md-8">
                <div class="profile-bio pt-4 pb-3 px-4 bg-white shadow-sm mb-4">
                    <h2>{{ $user['first_name'] }} {{ $user['last_name'] }}</h2>
                    <p>{{ $user['bio'] }}</p>
                </div>
            </div>
            <div class="col-12">
                <div class="profile-tags bg-white shadow-sm p-3 mb-4">
                    <ul class="tags-list list-inline m-0">
                        <li>
                            <span class="btn btn-primary">Some text</span>
                        </li>
                        <li>
                            <span class="btn btn-primary">Some</span>
                        </li>
                        <li>
                            <span class="btn btn-primary">Some text</span>
                        </li>
                        <li>
                            <span class="btn btn-primary">Some</span>
                        </li>
                        <li>
                            <span class="btn btn-primary">Some text</span>
                        </li>
                        <li>
                            <span class="btn btn-primary">Some</span>
                        </li>
                        <li>
                            <span class="btn btn-primary">Some text</span>
                        </li>
                        <li>
                            <span class="btn btn-primary">Some text</span>
                        </li>
                        <li>
                            <span class="btn btn-primary">Some text</span>
                        </li>
                        <li>
                            <span class="btn btn-primary">Some text</span>
                        </li>
                        <li>
                            <span class="btn btn-primary">Text</span>
                        </li>
                        <li>
                            <span class="btn btn-primary">Some text</span>
                        </li>
                        <li>
                            <span class="btn btn-primary">Some text</span>
                        </li>
                        <li>
                            <span class="btn btn-primary">Some text</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <div class="profile-content pt-4 pb-3 px-4 bg-white shadow-sm mb-4">
                    <h2>About</h2>
                    <p>{{ $user['about'] }}</p>
                </div>
            </div>
            <div class="col-12">
                <div class="profile-feedback pt-4 pb-3 px-4 bg-white shadow-sm mb-4">
                    <h2>Form</h2>
                    <form action="#">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <div class="feedback-list">
                        <div class="bg-secondary text-white pt-3 px-3 pb-1 rounded mb-3">
                            <h4>@user</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cumque autem dolore minus quasi aut magnam quae, eveniet quod natus et temporibus hic veniam possimus quia. Eaque distinctio ut tempora?</p>
                        </div>
                        <div class="bg-secondary text-white pt-3 px-3 pb-1 rounded mb-3">
                            <h4>@user</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cumque autem dolore minus quasi aut magnam quae, eveniet quod natus et temporibus hic veniam possimus quia. Eaque distinctio ut tempora?</p>
                        </div>
                        <div class="bg-secondary text-white pt-3 px-3 pb-1 rounded mb-3">
                            <h4>@user</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cumque autem dolore minus quasi aut magnam quae, eveniet quod natus et temporibus hic veniam possimus quia. Eaque distinctio ut tempora?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
