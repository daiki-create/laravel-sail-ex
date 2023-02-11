<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Input extends Component
{
    public $posts; // ユーザが入力する値
    public $requestList; // チェックボックスで表示するリスト
    public $prefectures; // selectで表示する都道府県のリスト
    
    public function mount()
    {
	// チェックボックスで表示すデータをconfigファイルから取得する
        $this->requestList = config('contact.requests');
	// チェックボックスで表示すデータをconfigファイルから取得する
        $this->prefectures = config('contact.prefectures');
	// 確認画面から入力に戻ったときのため、sessionに保存した入力値を取得
        $this->posts = session()->get('posts');
    }
    
    public function render()
    {
        return view('livewire.input');
    }
}
