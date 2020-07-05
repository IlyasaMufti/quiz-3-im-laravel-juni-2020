<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel{
	Public static function get_all(){
	$artikel = DB::table('artikels')->get();

	return $artikel;
	}

	public static function save($data){
		$new_artikel = DB::table('artikels')->insert($data);
		return $new_artikel;
	}

	Public static function find_by_id($id){
		$artikel = DB::table('artikels')->get()->where('id','=',$id) ;

		return $artikel;
	}

	Public static function update($id, $request){
		$artikel=DB::table('artikels')
		->where('id',$id)
		->update(["Judul" => $request["Judul"],
					"Isi" => $request["Isi"],
					"tag" => $request["tag"]]);

		return $artikel;
	}

	Public static function destroy($id){
		$deleted=DB::table('artikels')
		-> where('id',$id)
		->delete();
	}
}
