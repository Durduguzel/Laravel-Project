<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Command;

class CustomerController extends Controller
{
    public function create(){
        $customer_id = 6;
        $title = 'televizyon';
        $description = 'kırmızı';

        $customer = Customer::findOrFail($customer_id);

        $command = new Command([
            'customer_id' => $customer_id,
            'title' => $title,
            'description' => $description
        ]);

        $customer->command()->save($command);
        return "veri eklendi";
    }
    public function update(){
        $id = 1;
        $title = 'yeni başlık';
        $description = 'yeni açıklama';

        Command::where('id',$id)->update([
            'title' => $title,
            'description' => $description
        ]);
        return "veri güncellendi";
    }
    public function read(){
        $customer_id = 5;
        $customer = Customer::findOrFail($customer_id);
        return $customer->command->description;
    }
    public function delete(){
        $command_id = 1;
        Command::where('id', $command_id)->delete();
        return "veri silindi";
    }
}
