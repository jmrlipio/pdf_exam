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
    
    public function pdfview(Request $request)
    {
        
        if($request->has('download'))
        {
            $users = DB::table('user_templates')->where('id', '38')->first();
            $html = view('pdflayout', compact('users'))->render();
            
            $source = base_path().'/storage/my_pdf.pdf';
            
            if (file_exists($source)):
                unlink($source);
            endif;
            
            $pdf =  PDF::loadHTML($html)->save(base_path().'/storage/my_pdf.pdf');
            //return $pdf->download('pdfview.pdf');
            return $pdf->stream();
            
        }
    }
}