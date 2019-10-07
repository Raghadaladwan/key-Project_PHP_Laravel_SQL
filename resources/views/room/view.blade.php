@extends('layouts.app')

@section('content')

    <div class=" ml-5 mb-3">
        <div class="col-sm-1">
            <a href="{{ route('room.create') }}" class="btn btn-block btn-warning"> Add Room</a>
        </div>
    </div>

    @foreach($rooms as $room)
        <div class="row">
            <div class="col-sm-12">
                <div class="container"
                     style="
            display: grid;
            grid-template-columns: auto auto;">

                    <div>
{{--                        <img src="{{$room->img}}">--}}
                        <img src="{{URL::asset('images/'.$room->img)}}" />
                    </div>

                    <div>
                        <h4>Title : {{ $room->title }}</h4>
                        <h4>Location:{{ $room->location }}</h4>
                        <h4>Floor:{{ $room->floor }}</h4>
                        <h4>Number of rooms:{{ $room->num_bed }}</h4>
                        <h4>Price :{{ $room->price }}</h4>
                        <h4>Phone : {{ $room->phone }}</h4>
                    </div>
                    {{--                    <img src="/image/icon.png" alt="">--}}


                </div>
                <div style="margin-left: 50px;">
                <a class=" btn btn-danger" href="{{ route('room.delete',['id'=>$room->id]) }}"> delete </a>
                    <a class=" btn btn-info" href="{{ route('room.edit',['id'=>$room->id]) }}"> Edit </a>
{{--                    <a href="{{ route('route.edit',['id'=>$room->id]) }}"></a>--}}
{{--                    <a href="{{ url('/route/edit', $room->id) }}">EDIT</a>--}}
                </div>
                <br>
{{--                <h2>--}}

{{--                    <h4>Title : {{ $room->title }}</h4>--}}
{{--                    <h4>Location:{{ $room->location }}</h4>--}}
{{--                    <h4>Floor:{{ $room->floor }}</h4>--}}
{{--                    <h4>Number of rooms:{{ $room->num_bed }}</h4>--}}
{{--                    <h4>Price{{ $room->price }}</h4>--}}
{{--                    <h4>Phone nu{{ $room->phone }}</h4>--}}
{{--                    <img src="/image/icon.png" alt="">--}}
{{--                    <img src="{{$room->img}}">--}}


{{--                    <h4> Due Date: <small> {{ $room->created_at }}</small> </h4>--}}
{{--                    <a href="{{ route('room.edit',['id'=>$room->id]) }}"> Edit </a>--}}
{{--                    <a href="{{ route('room.delete',['id'=>$room->id]) }}"> delete </a>--}}
{{--                </h2>--}}



                    {{--<form action="{{ route('room',$room->room_id) }}" method="POST">--}}

                    {{--<a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">Show</a>--}}

                    {{--<a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>--}}

                    {{--@csrf--}}
                    {{--@method('DELETE')--}}

                    {{--<button type="submit" class="btn btn-danger">Delete</button>--}}
                    {{--</form>--}}


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

