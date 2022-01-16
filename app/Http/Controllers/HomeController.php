<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function tempUploads(Request $request) {
        if ($request->has('file')) {
            $fileUploaded = $request->file;
            $fileName = uniqid(). '-' . $fileUploaded->getClientOriginalName();
            $fileUploaded->move('uploads/tempUploads/', $fileName);
            $status = true;
            $info =  $fileName;
        } else {
            $status = false;
            $info = 'No file uploaded';
        }

        $output = [
            'status' => $status,
            'info' => $info
        ];

        print json_encode($output);
    }

    public function getExternalApiData(Request $request)
    {
        $matchingTerm = $request->term['term'];
        $data = file_get_contents($request->url);
        $dataToSend = json_decode($data, true);
        $data = [];
        foreach($dataToSend['data'] as $k => $v) {
            if(strstr($v['name'], $matchingTerm))
            $data[] = ['id' => $v['id'], 'text' => $v['name']];
        }
        print json_encode($data);
    }
}
