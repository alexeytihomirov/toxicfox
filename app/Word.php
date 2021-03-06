<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $table = 'words';
    protected $primaryKey = 'word';
    public $timestamps = false;

    protected $fillable = ['word', 'times'];

    public static function store($word, $times)
    {
        self::query()->updateOrInsert(['word' => $word], ['times' => \DB::raw('times + ' . $times)]);
    }
}
