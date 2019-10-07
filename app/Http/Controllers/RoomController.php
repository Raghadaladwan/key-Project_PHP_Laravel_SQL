<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RoomController extends Controller
{
//
    /** public function __construct()
    //    {
    //        $this->middleware('auth');
    //    }
     * //------------------------------------------------------------------------------------------------------------------------------------------------------------------
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('room.view')
//        return view('room.index')->with(Room::all());
//            ->with('rooms', $table);

        if (Auth::check()) {
//            // dd(Auth::id());
            $room_id = Auth::id();
            $table = Room::where('room_id', $room_id)->get();
            return view('room.view')->with('rooms', $table);
        } else {
//            return view('welcome');
            return view('room.show')->with(Room::all());
        }
    }




    public function create()
    {
        return view('room.create');
    }

    public function store(Request $request)
    {

        if ($request->hasFile('img'))
        {
            $image = $request->file('img');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        }

//        dd($request);
        Room::create([
            'title'=>$request->input('title'),
            'location'=>$request->input('location'),
            'price'=>$request->input('price'),
            'floor'=>$request->input('floor'),
            'gender'=>$request->input('gender'),
            'phone'=>$request->input('phone'),
            'description'=>$request->input('description'),
            'num_bed'=>$request->input('num_bed'),
            'rating'=>$request->input('rating'),
            'img'=>$name,

            'room_id'=>auth()->id(),

        ]);

        return redirect()->route('room.view');
//        return view('room.index');



//        $this->validate($request,[
//            "title"    => "required",
//            "location" => "required",
//            "price"    => "required",
//            "floor"    => "required",
//            "gender"   => "required",
//            "phone"    => "required",
//            "description"=>"required",
//            "num_bed"  =>"required",
//            "rating" =>'required',
//            'img'=>"required",
//        ]);
//
//        $table = new Room;
//        $table-> title = $request->title;
//        $table->room_id = auth()->id();
//        $table->room_id = 1;
//        $table-> location = $request->location;
//        $table-> price = $request->price;
//        $table-> floor = $request->floor;
//        $table-> gender = $request->gender;
//        $table-> phone = $request->phone;
//        $table-> description = $request->description;
//        $table-> num_bed = $request->num_bed;
//        $table-> img = $request->img;
//        $table->rating = 2;
//        $table -> img = $request->img;
//        $table->save();
//        dd($table->all());
//        return redirect()->route('room.index');

    }


    public function show()
    {

//        $room = Room::all();
//        return view('room.show', compact('room'));
        return view('room.show')->with('rooms',Room::all());

//        return view("room.show", compact("rooms"));
//        missing $id
//        return view('room.show');
//        return view('room.show')->with(Room::all());
//        return view('room.index')->with(Room::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $room = Room::find($id);
//
//        return view('edit',compact('room'));
        $room = Room::find($id);
        return view('room.edit')->withRoom($room);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room = Room::find($id);

        $room->title =$request->title;
        $room->phone =$request->phone;
        $room->price =$request->price;
        $room->location =$request->location;
        $room->floor =$request->floor;
        $room->num_bed =$request->num_bed;
        $room->gender =$request->gender;
        $room->description =$request->description;


        $room->img =$request->img;


        $room->room_id = auth()->id();



        $room->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Room::find($id);
        $table->delete();
        Room::destroy($id);
        return redirect()->back();
    }
    public function view(){
//        return view('room.view');
//        return view('room.view')->with('rooms',Room::all());

        if (Auth::check()) {
//            // dd(Auth::id());
            $room_id = Auth::id();
            $table = Room::where('room_id', $room_id)->get();
            return view('room.view')->with('rooms', $table);
        } else {
            return view('welcome');
        }
    }


}
