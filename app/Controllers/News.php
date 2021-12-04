<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
     public function test()
     {
         $news_model = new NewsModel();

         $news_model->insert(['news_title' => 'Title2', 'news_description' => 'Description2']);
         //$row = $news_model->find('2');
         $news_model->update('5', ['news_title'=>'', 'news_description'=> 'My Description']);
         $news_model->where('news_title', 'Title2')
             ->delete();

         /*$result = $news_model->where(['news_title'=>'Title2'])->get()->getResult();
         echo '<pre>';
         print_r($result);
         print_r($result[0]['news_description']);*/
     }



    public function create()
    {
        $model = model(NewsModel::class);

        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'body'  => 'required',
            ])) {
            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', true),
                'body'  => $this->request->getPost('body'),
            ]);

            echo view('News/success');
        }
        else
        {
            echo view('templates/header', ['title' => 'Create a news item']);
            echo view('News/create');
            echo view('templates/footer');
        }
    }

}
