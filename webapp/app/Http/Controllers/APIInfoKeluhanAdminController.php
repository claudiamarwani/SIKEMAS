<?php

namespace App\Http\Controllers;

use App\Models\Infokeluhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Transformers\InfoKeluahanTransformer;
use Illuminate\Support\Facades\DB;

class APIInfoKeluhanAdminController extends Controller
{

    public function readinfokeluhanadmin(Infokeluhan $infokeluhan) 
    {
        $infokeluhan= $infokeluhan->all();
        return response()->json($infokeluhan);
    }

    public function destroyadmin($id)
    {
        $infokeluhan = Infokeluhan::find($id);
        $infokeluhan->delete();
        return response()->json('Keluhan deleted successfully');
    }

}