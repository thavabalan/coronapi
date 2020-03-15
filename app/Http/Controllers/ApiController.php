<?php

namespace App\Http\Controllers;
use App\Info;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        $conf = Info::sum('confirmed');
        $recovered = Info::sum('recovered');
        $death = Info::sum('death');
        $data = array('confirmed' => $conf,
                        'recovered' => $recovered,
                        'death' => $death );

        return response()->json($data);
    }

    public function info(){
        $infos = Info::where('confirmed','>=','1')->get(['district_tamil as மாவட்டம்','confirmed as உறுதிப்படுத்தபட்டவர்கள்','recovered as சுகமடைந்தவர்கள்','death as இறந்தவர்கள்']);

        return response()->json($infos);
    }

    

    
}
