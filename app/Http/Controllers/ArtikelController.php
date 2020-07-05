<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController{

	public function index(){
    $artikel = ArtikelModel::get_all();
    return view('artikel.index', compact('artikel'));
    }

    Public function create(){
    	return view('artikel.form');
    }

    Public function store(Request $request){
    	$data = $request->all();
    	unset($data["_token"]);
    	$artikel = ArtikelModel::save($data);
    	$artikel = ArtikelModel::get_all();
    	return view('artikel.index', compact('artikel'));
    }

    Public static function show($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.detail', compact('artikel'));
    }

    Public static function edit($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.edit',compact('artikel'));
    }

    Public function update($id, Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $artikel = ArtikelModel::update($id, $data);
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.detail', compact('artikel'));
    }

    Public function delete($id){
        $deleted=ArtikelModel::destroy($id);
        return redirect('/artikel');
    }

}