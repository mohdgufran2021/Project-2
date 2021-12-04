<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $data =
            [
                [
                'news_title' => 'This is news 1',
                'news_description' => 'Lucknow News1',

                ],
                [
                'news_title' => 'This is news2',
                'news_description' => 'Lucknow News2',

                 ],
                 [
                    'news_title' => 'This is news3',
                    'news_description' => 'Lucknow News3',

                 ],
            ];
        $this->db->table('news')->insertBatch($data);
    }
}
