<?php

namespace App\Controllers;

use App\Models\TestModel;
use CodeIgniter\Controller;

class Test extends Controller
{
    public function test()
    {
        helper('form');
        $data = ['title' => 'Test Form', 'success' => false, 'error' => false];
        if ($this->request->getMethod() == 'post' && $this->validate([
                'name' => 'required',
                //'image'=>'required'
            ])) {
            /* $insert = [
                'name' => $this->request->getPost('name')
             ];*/
            $insert['name'] = $this->request->getPost('name');

            $file = $this->request->getFile('image');

                    /*   echo $file->getSize().'<br>';
                         echo $file->getType().'<br>';
                          echo $file->getMimeType();    */

            if ($file->isValid()) {
                $newName = $file->getRandomName();
                $move = $file->move(WRITEPATH . '/upload', $newName);
                if ($move) {
                    $insert['image'] = $newName;
                }
            }
            $obj = new TestModel();
            if ($obj->insert($insert)) {
                $data['success'] = true;
            }
        }
        echo view('templates/header', $data);
        echo view('test', $data);
        echo view('templates/footer', $data);
    }
}
