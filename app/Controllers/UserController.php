<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    // Affichage de la liste de nom
    public function index(){
        $UserModel = new UserModel();
        $data['users'] = $UserModel->orderBy('id', 'DESC')->findAll();
        return view('userlist', $data);
    }

    // form d'ajout user
    public function formUser(){
        return view('adduser');
    }
 
    // ajout des données
    public function add() {
        $UserModel = new UserModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $UserModel->insert($data);
        return $this->response->redirect(site_url('/userlist'));
    }

    // form de modif
    public function singleUser($id = null){
        $UserModel = new UserModel();
        $data['user_obj'] = $UserModel->where('id', $id)->first();
        return view('updateuser', $data);
    }

    // modif des données utilisateurs
    public function update(){
        $UserModel = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $UserModel->update($id, $data);
        return $this->response->redirect(site_url('/userlist'));
    }
 
    // Suppression de l'Utilisateur
    public function delete($id = null){
        $UserModel = new UserModel();
        $data['user'] = $UserModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/userlist'));
    }    
}