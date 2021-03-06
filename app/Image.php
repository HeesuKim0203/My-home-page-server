<?php

namespace App ;

use Illuminate\Database\Eloquent\Model ;

class Image extends Model
{
    public $timestamps = false ;
    protected $fillable = [ 'id', 'url' ] ;

    public function create_column($url) {
        $result = self::create([
            'url' => $url
        ]) ;

        return $result ;
    }

    public function get_all_column () {
        $result = self::select('*')
            ->get() ;

        return $result ;
    }

    public function delete_column($id) {
        $result = self::where('id', '=', $id)->delete() ;

        return $result ;
    }
}
