<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdfGenerator(Request $request, $id) {
        $user = User::where('id',$id)->first();
        $pdf = PDF::loadView('pdf', compact('user'));
        $file_name = $user->name.'_'.$id;
        return $pdf->download($file_name.'.pdf');
    }
}
