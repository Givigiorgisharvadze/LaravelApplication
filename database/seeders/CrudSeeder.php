<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\crud;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        crud::create([
            'title' => 'Anna Karenina',
            'author' => 'Leo Tolstoy',
            'body' => 'Anna Karenina tells of the doomed love affair between the sensuous and rebellious 
            Anna and the dashing officer, Count Vronsky. Tragedy unfolds as Anna rejects her passionless 
            marriage and must',
            'active' => '0',
        ]);
        crud::create([
            'title' => 'War and Peace Bovary',
            'author' => 'Gustave Flaubert',
            'body' => "Epic in scale, War and Peace delineates in graphic detail events leading up to 
            Napoleon's invasion of Russia, and the impact of the Napoleonic era on Tsarist society, as 
            seen through the eyes of",
            'active' => '0',
        ]);
        crud::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'body' => 'The novel chronicles an era that Fitzgerald himself dubbed the "Jazz Age". 
            Following thex shock and chaos of World War I, American society enjoyed unprecedented
             levels of prosperity during the',
            'active' => '0',
        ]);
        crud::create([
            'title' => 'Lolita ',
            'author' => 'Vladimir Nabokov',
            'body' => 'The book is internationally famous for its innovative style and infamous for its controversial subject: the protagonist and unreliable narrator, middle aged Humbert Humbert, becomes obsessed and',
            'active' => '0',
        ]);
        crud::create([
            'title' => 'Clarissa',
            'author' => 'Samuel Richardson',
            'body' => 'It tells the tragic story of a heroine whose quest for 
            virtue is continually thwarted by her family, and is one of the longest novels in the English la',
            'active' => '1',
        ]);
        crud::create([
            'title' => 'A Passage to India',
            'author' => 'E. M. Forster',
            'body' => 'The main character, an African American woman in her early forties named Janie Crawford, tells th
            e story of her life and journey via an extended flashback to her best friend, Pheoby, so thatFrench Revolution.',
            'active' => '0',
        ]);
        crud::create([
            'title' => 'Anna Karenina',
            'author' => 'Charles Dickens',
            'body' => 'A Tale of Two Cities is an historical novel published in 1859 by Charles Dickens, set in London and Paris before and during the French Revolution.',
            'active' => '1',
        ]);
        crud::create([
            'title' => 'Collected Stories',
            'author' => 'Raymond Chandler',
            'body' => "A complete collection of short fiction by the cre
            ator of Philip Marlowe includes stories such as 'Blackmailers Don't Shoot,' 'The Pencil,' and 'English Summer.'",
            'active' => '1',
        ]);
        crud::create([
            'title' => 'The Man Who Loved Children',
            'author' => 'Charles Dickens',
            'body' => "The novel tells the story of a highly dysfunctional family, the Pollits. The story centers on the family's impoverishment, the failure of the father Sam to provide for them, the parents' marital ba.",
            'active' => '1',
        ]);
        crud::create([
            'title' => 'tjhe Lever',
            'author' => 'Charles Dickens',
            'body' => 'A Tale of Two Cities is an historical wnovel published in 1859 by Charles Dickens, set in London and Paris before and during the French Revolution.',
            'active' => '1',
        ]);
    }
}
