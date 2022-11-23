<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\messageModel;
use App\Models\User;
use App\Models\Donner;
use App\Models\Allcase;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Stichoza\GoogleTranslate\GoogleTranslate;
use GuzzleHttp\Client;

class WebCont extends Controller
{
    public function index()
    {
        return view('main');
    }
    public function login(Request $req)
    {

        $name = ucfirst($req['name']) ?? "";
        $pass = md5($req['password']);
        if ($name != "") {
            if (User::where('name', '=', $name)->exists()) {
                $data = User::where('name', '=', $name)->first();
                if ($pass == $data->password) {
                    $session_data = [
                        'id'=>$data->id,
                        'name' => $name,
                        'password' => $pass,
                        'role' => $data->role,
                        'logged_in' => true
                    ];
                    session()->put($session_data);
                    if($data->role=='docs'){
                        return redirect('/case-all');
                    }
                    return redirect('/dashboard');
                } else {
                    $admin_error_pass = "Password Wrong";
                    $admin_error_name = "";
                    $data = compact('admin_error_pass', 'admin_error_name');
                    return view('login')->with($data);
                }
            } else {
                $admin_error_name = "username does not exist";
                $admin_error_pass = "";
                $data = compact('admin_error_name', 'admin_error_pass');
                return view('login')->with($data);
            }
        }
    }
    public function logout()
    {
        session()->flush();
        return view('messages.logout');
    }
    public function contact(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]); 
        $message=new messageModel();
        $details = [
            'name'=>$req['name'],
            'number'=>$req['number'],
            'email'=>$req['email'],
            'message'=>$req['message'],
            'adress'=>$req['user_adress'],
            'ip'=>$req->ip(),
        ];
        $list=['bdsuetksk1@gmail.com'];
        $mail=new \App\Mail\contactMail($details);
        Mail::to($list)->send($mail);
        return response()->json([true]);
    }
    public function dashboard()
    {
        return view('admin-dashboard');
    }
    public function get_donner(Request $req)
    {
        $from = date('Y-m-d');
        $to = date('Y-m-d', strtotime("-3 months", strtotime($from)));
        $group = $req['group'];
        if (isset($req['eligible']) && $req['eligible'] == 'on') {
            $donners = Donner::where([['date', '<', $to], ['group', '=', $group]])->get();
        } else {
            $donners = Donner::where('group', '=', $group)->get();
        }
        $array = json_encode($donners);
        $data = compact('group', 'array');
        return view('search_donner')->with($data);
    }
    public function report()
    {   $start = Carbon::now()->startOfMonth();
        $end=Carbon::now()->startOfMonth()->addDays(2);
        $totalCaseMonth=array();
        $totalSolvedMonth=array();
        $totalDonnerMonth=array();
        for ($i=0; $i <16; $i++) { 
            $case=Allcase::whereBetween('created_at',[$start,$end])->count();
            $arng=Allcase::whereBetween('created_at',[$start,$end])->where('arranged_by', '=', 'BDS')->count();
            $doner=Donner::whereBetween('created_at',[$start,$end])->count();
            $doner=Donner::where('created_at','<',$end)->count();
            array_push($totalCaseMonth,$case);
            array_push($totalSolvedMonth,$arng);
            array_push($totalDonnerMonth,$doner);
            $start->addDays(2);
            $end->addDays(2);
        }
        
        $totalCase = Allcase::count();
        $totalDonner = Donner::count();
        $solvedCase = Allcase::where('arranged_by', '=', 'BDS')->count();
        $percent = ($solvedCase / $totalCase) * 100;
        $percent= number_format((float)$percent, 2, '.', '');
        $data = compact('totalCase', 'totalDonner', 'solvedCase', 'percent','totalCaseMonth','totalSolvedMonth','totalDonnerMonth');
        return view('report')->with($data);
    }
    public function pleg()
    {
        return view('pleg');
    }
    public function pleg_submit(Request $req)
    {
        $urd= GoogleTranslate::trans($req->text, 'ur', 'en');
        $eng= GoogleTranslate::trans($urd, 'en', 'ur');
        // $client = new Client();
        // $response = $client->request('POST', 'https://wai.wordai.com/api/rewrite', [
        //     'form_params' => [
        //         'email' => 'cibekecopw@gmail.com',
        //         'key' => '98c849a04503fb359449054aa8b3d3f7',
        //         'input'=>$eng,
        //         'rewrite_num' => 2,
        //         'uniqueness' => 2,
        //         'return_rewrites'=>false
        //     ]
        // ]);
        // dd(json_decode($response->getBody(), true)['text']);
        // $result= json_decode($response->getBody(), true)['text'];
        // $result = str_replace(array('[',']','{','}','/','|','\\'), '',$result);
        // $result = str_replace('.', '. ',$result);
        return $eng;
    }

}
