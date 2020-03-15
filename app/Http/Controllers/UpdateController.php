<?php

namespace App\Http\Controllers;
use App\Info;
use Illuminate\Http\Request;
use Session;


class UpdateController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function index(){
        $infos = Info::all();
        return view('welcome')->withInfos($infos);
    }
    public function edit($id){
        $info = Info::find($id);
        return view('update')->withInfo($info);
    }
    public function update(Request $request,$id){   
        $this->validate($request, array(
            'death'         => 'required',
            'confirmed'          => 'required',
            'recovered'   => 'required',
            
        ));
        $info=Info::find($id);
        $info->death = $request->death;
        $info->confirmed = $request->confirmed;
        $info->recovered = $request ->recovered;
        $info->save();
        Session::flash('success', 'The Information was successfully Updates!');
        return redirect()->route('info.edit',$info->id);

    }
}
