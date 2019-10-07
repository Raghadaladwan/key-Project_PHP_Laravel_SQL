@extends('layouts.app')


<h1>Index</h1>


@section('content')

        @foreach($rooms as $room)
            <div class="row">
                <div class="col-sm-12">
                    <h2>
                        {{ $room-> title }}
                        <h4> Due Date: <small> {{ $room->created_at }}</small> </h4>
                    </h2>

                    <hr>
                </div>
            </div>

        @endforeach

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



