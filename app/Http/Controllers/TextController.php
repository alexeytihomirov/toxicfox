<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController
{
    public function post(Request $request)
    {

        // We are waiting post param "text" with input text
        $text = $request->input('text', '');

        if (!$text) {
            return;
        }

        // This function is splitting text by words and removing commas, dots etc
        // WARNING! It also removes utf8 characters. There are several workarounds but i think as a simple example
        // this would be enough. Also hyphen is counted as word.
        $words = str_word_count($text, 1);

        if (!$words) {
            return;
        }

        // Let's create list of words with their count
        $counts = [];
        foreach ($words as $word) {
            $word = mb_strtolower($word);
            $counts[$word] = isset($counts[$word]) ? $counts[$word] + 1 : 1;
        }

        // Update words data in database
        foreach ($counts as $word => $times) {
            \App\Word::store($word, $times);
        }
    }

    public function test()
    {
        return view('text.test');
    }
}
