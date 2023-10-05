<?php

namespace App\Http\Controllers;

use App\Models\EquipmentSeller;
use App\Models\JobDescription;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;

class VisitorController extends Controller
{
    //
    public function visitorPage(){
        $data = null;
if(Session::has('userid')){
    $data = User::find(Session::get('userid'));
}

$product = EquipmentSeller::all();
$jobs = JobDescription::all();

return view('Visitor.visitor', [
    'data' => $data,
    'product' => $product,
    'jobs' => $jobs,
]);
    }
}
