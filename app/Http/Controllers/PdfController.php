<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use PDF;
use App\Users;
use DB;
class PdfController extends Controller
{
    
    public function __construct()
    {
        
    }
    
    public function index()
    {
        return view('home');
    }
    
    public function test()
    {
        //$users = DB::table('user_templates')->where('id', '38')->first();
        //return dd($users);
        
        $users = DB::table('user_templates')->where('id', '38')->first();
        return view('pdflayout', compact('users'));
    }
    
    public function pdfview(Request $request)
    {
        
        if($request->has('download'))
        {
            $users = DB::table('user_templates')->where('id', '38')->first();
            $html = view('pdflayout', compact('users'))->render();
            $pdf =  PDF::loadHTML($html);
            //return $pdf->download('pdfview.pdf');
            return $pdf->stream();
        }
    }
}