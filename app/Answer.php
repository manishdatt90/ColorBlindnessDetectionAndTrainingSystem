<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    static $correct_answers = [
        1=> ['correct'=>12, 'rgd'=>null, 'message'=>'This plate has 12 written in Red. Refer to Image on right for learning & observing Red color on left..'],
        2=>['correct'=>8, 'rgd'=>3,'message'=>'This plate has 8 written in Red. Refer to Image on right for learning & observing Red color on left. '],
        3=>['correct'=>'6', 'rgd'=>5,'message'=>'This plate has 6 written in Red. Refer to Image on right for learning & observing Red color on left. '],
        4=>['correct'=>'29', 'rgd'=>70,'message'=>'This plate has 29 written in Red. Refer to Image on right for learning & observing Red color on left. '],
        5=>['correct'=>'57', 'rgd'=>35,'message'=>'This plate has 57 written in Red. Refer to Image on right for learning & observing Red color on left.'],
        6=>['correct'=>'5', 'rgd'=>2,'message'=>'This plate has 5 written in Green. Refer to Image on right for learning & observing Green color on left. '],
        7=>['correct'=>'3', 'rgd'=>5,'message'=>'This plate has 3 written in Green. Refer to Image on right for learning & observing Green color on left. '],
        8=>['correct'=>'15', 'rgd'=>17,'message'=>'This plate has 15  written in Green. Refer to Image on right for learning & observing Green color on left.'],
        9=>['correct'=>'74', 'rgd'=>21,'message'=>'This plate has 74  written in Green. Refer to Image on right for learning & observing Green color on left.'],
        10=>['correct'=>'2', 'rgd'=>null,'message'=>''],
        11=>['correct'=>'6', 'rgd'=>null,'message'=>''],
        12=>['correct'=>'97', 'rgd'=>null,'message'=>''],
        13=>['correct'=>'45', 'rgd'=>null,'message'=>''],
        14=>['correct'=>'5', 'rgd'=>null,'message'=>''],
    ];

    public static function isCorrectAnswer($index, $answer){
        $var =  self::$correct_answers[$index];
        return $var['correct'] == $answer || $var['rgd'] == $answer;
    }

    public static function isRgd($index, $answer){
        $var =  self::$correct_answers[$index];
        return $var['rgd'] == $answer;
    }



    public function user(){
        return $this->belongsTo(User::class);
    }

    public function test(){
        return $this->belongsTo(Test::class);

    }
}
