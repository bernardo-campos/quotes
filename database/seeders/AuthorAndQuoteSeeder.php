<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Quote;
use Illuminate\Support\Str;

class AuthorAndQuoteSeeder extends Seeder
{
    public function run()
    {
        $data = file_exists($file = __DIR__ . '/_authors_and_quotes.php')
            ? include($file)
            : include(__DIR__ . '/_authors_and_quotes.example.php');

        $dt = date('Y-m-d H:i:s');

        foreach ($data as $completeAuthor) {
            $author_id = Author::insertGetId([
                'name' => $completeAuthor['name'],
                'slug' => Str::slug($completeAuthor['name'], '-'),
                'letter' => mb_strtoupper(Str::ascii($completeAuthor['name'])[0]),
                'popularity' => isset($completeAuthor['popularity']) ? intval($completeAuthor['popularity'] / 1000) : 0,
                'description' => $completeAuthor['desc'],
                'created_at' => $dt,
                'updated_at' => $dt,
            ]);
            foreach ($completeAuthor['quotes'] as $frase) {
                $length = strlen($frase);
                $words = count(explode(" ", $frase));
                Quote::insert([
                    'author_id' => $author_id,
                    'quote' => $frase,
                    'length' => $length,
                    'words' => $words,
                    'created_at' => $dt,
                    'updated_at' => $dt,
                ]);
            }
        }
    }
}
