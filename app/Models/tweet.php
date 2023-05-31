<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tweet extends Model
{
    use HasFactory;
    public $timestamps = false;
    // public function (){
    //     /* teams テーブルに設定した coach_id で関連付けする
    //      * $this->hasOne(<連携先クラス名>::class)
    //      */
    //     return $this->hasOne(User::class);
}
