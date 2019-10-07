@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!

                </div>
            </div>
        </div>
    </div>
</div>

<div class="key-footer">
    <span style="margin-right:36px;line-height: 29px;">All rights are reserved by E 7 N A © 2019</span>
    <span>+ (962) 790163199</span>
    <div>
        <a href="https://www.facebook.com/">
            <img src="https://image.flaticon.com/icons/svg/124/124010.svg" width="36" height="36" />
        </a>
        <a href="https://twitter.com/?lang=en">
            <img src="https://upload.wikimedia.org/wikipedia/fr/c/c8/Twitter_Bird.svg" width="36" height="36" />
        </a>
        <a href="https://www.linkedin.com/">
            <img src="https://i0.wp.com/www.vectorico.com/wp-content/uploads/2018/02/LinkedIn-Logo-R.png?fit=679%2C600" width="36" height="36"/>
        </a>

    </div>
</div>
@endsection
