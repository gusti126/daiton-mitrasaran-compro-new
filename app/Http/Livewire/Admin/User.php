<?php

namespace App\Http\Livewire\Admin;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public $limit = 6;
    public $confirmId, $keyword;
    public $userModal, $userId;


    public function render()
    {
        $data = ModelsUser::limit($this->limit)->get();
        if ($this->keyword !== null) {
            $data  = ModelsUser::where('name', 'like', '%' . $this->keyword . '%')->orWhere('email', 'like', '%' . $this->keyword . '%')->get();
        }
        return view('livewire.admin.user', [
            'users' => $data,
        ])->extends('layouts.admin')->section('content');
    }

    public function loadMore()
    {
        $this->limit += 6;
    }

    public function confirmDelet($id)
    {
        $this->confirmId = $id;
    }

    public function hapus()
    {
        $user = ModelsUser::find($this->confirmId);

        $user->delete();

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil hapus data',
            'timer' => 4000,
            'icon' => 'success',
            'toast' => true,
            'position' => 'top-right',
            'showCancelButton' => false, // There won't be any cancel button
            'showConfirmButton' =>  false // There won't be any confirm button
        ]);
    }
    public function hapusNo()
    {
        $this->confirmId = 0;
    }

    public function showModal($id)
    {

        $this->userId = $id;

        $user = ModelsUser::find($id);
        // $this->userModal = $user;
        $this->userModal['name'] = $user->name;
        // dd($this->userModal);
        // dd($this->userModal->name);
        $this->dispatchBrowserEvent('modalShow', $this->userModal);
    }

    public function hiddenModal()
    {
        $this->userId = 0;
    }
}
