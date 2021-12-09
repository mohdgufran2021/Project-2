<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    public function test()
    {
        /*$a = ['id'=>'12','name'=>'gufran','age'=>'20'];
        $a=['age'=>25];
        $a['age']=25;
        echo $a['age'];*/

        $news_model = new NewsModel();

        $news_model->insert(['news_title' => 'Title2', 'news_description' => 'Description2']);
        //$row = $news_model->find('2');
        $news_model->update('5', ['news_title' => '', 'news_description' => 'My Description']);
        $news_model->where('news_title', 'Title2')
            ->delete();

        /*$result = $news_model->where(['news_title'=>'Title2'])->get()->getResult();
        echo '<pre>';
        print_r($result);
        print_r($result[0]['news_description']);*/
    }


    public function create()
    {
        helper('form');
        $model = model(NewsModel::class);

        $session = session();
        if (!$session->get('is_logged_in')) {
            return redirect()->to('/user/login');
        }

        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'body' => 'required',
                'status' => 'required',
            ])) {
            $insert = [
                'title' => $this->request->getPost('title'),
                'slug' => url_title($this->request->getPost('title'), '-', true),
                'body' => $this->request->getPost('body'),
                'user_id' => $session->get('user_id'),
                'status' => $this->request->getPost('status'),
            ];


            $image = $this->request->getFile('image');
            if ($image->isValid()) {
                $newName = $image->getRandomName();
                $moved = $image->move(WRITEPATH . '/upload', $newName);
                if ($moved) {
                    $insert['image'] = $newName;
                }
            }
            $model->save($insert);

            return redirect()->to('/news/index');
        } else {
            echo view('templates/header', ['title' => 'Create a news item']);
            echo view('News/create');
            echo view('templates/footer');
        }
    }


    public function index()
    {
        $session = session();
        if (!$session->get('is_logged_in')) {
            return redirect()->to('/user/login');
        }
        $obj = new NewsModel();
        $data = ['title' => 'Create a news item', 'news' => $obj->findAll()];
        echo view('templates/header', $data);
        echo view('News/index', $data);
        echo view('templates/footer', $data);
    }

    public function delete($id)
    {
        $session = session();
        if (!$session->get('is_logged_in')) {
            return redirect()->to('/user/login');
        }
        $obj = new NewsModel();
        $find = $obj->find($id);
        if ($find['user_id'] == $session->get('user_id')) {
            $obj->delete($id);
        }
        return redirect()->to('/news/index');
    }


    public function edit($id)
    {
        helper('form');
        $session = session();
        if (!$session->get('is_logged_in')) {
            return redirect()->to('/user/login');
        }


        $model = model(NewsModel::class);
        $row = $model->find($id);
        /*echo'<pre>';
        print_r($session);die();*/
        if ($row['user_id'] != $session->get('user_id')) {
            return redirect()->to('/news/index');
        }
        $data = ['title' => 'Edit news item', 'row' => $row, 'success' => false];
        if (!$session->get('is_logged_in')) {
            return redirect()->to('/user/login');
        }

        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'body' => 'required',
                'status' => 'required',
            ])) {

            $insert = [
                'title' => $this->request->getPost('title'),
                'slug' => url_title($this->request->getPost('title'), '-', true),
                'body' => $this->request->getPost('body'),
                'user_id' => $session->get('user_id'),
                'status' => $this->request->getPost('status')
            ];
              $image = $this->request->getFile('image');
            if ($image->isValid()) {
                $newName = $image->getRandomName();
                $moved = $image->move(WRITEPATH . '/upload', $newName);
                if ($moved) {
                    $insert['image'] = $newName;
                }
            }
            $model->update($id, $insert);
            $data['success'] = true;
        }
        echo view('templates/header', $data);
        echo view('News/edit', $data);
        echo view('templates/footer', $data);
    }
}
