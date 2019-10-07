@extends('layouts.app')

@section('content')
    <div class="container">
<form action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="Enter phone">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" name="price" placeholder="Price">
    </div>

    <div class="form-group">
        <label for="location">Location</label>
        <select class="form-control" name="location" id="location">
            <option> University of Jordan st.</option>
            <option> Yarmouk university st. </option>
            <option> Al-Balq'a university</option>
            <option> Sumaya university</option>
        </select>
    </div>
    <div class="form-group">
        <label for="floor">Floor</label>
        <select class="form-control" name="floor" id="floor">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="floor">Number of bed</label>
        <select class="form-control" name="num_bed" id="num_bed">
            <option>1</option>
            <option>2</option>
        </select>
    </div>

    <div class="form-group">
        <label for="floor">Gender</label>
        <select class="form-control" name="gender" id="Gender">
            <option>Male</option>
            <option>Female</option>
        </select>
    </div>

    <div class="form-group">
        <label for="description">description textarea</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="img">Upload Image</label>
        <input type="file" class="form-control-file" name="img" >
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>

    <div class="key-footer">
        <span style="margin-right:36px;line-height: 29px;">All rights are reserved by E7NA © 2019</span>
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
