<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index() {
        $banks = Bank::get()->toJson(JSON_PRETTY_PRINT);
        return response($banks, 200);
    }

    public function createBank(Request $request) {
        $bank = new Bank;
        $bank->bank_name=$request->bank_name;
        $bank->bank_rate=0;
        $bank->save();

        return response()->json([
            "message" => 'new bank added'
        ],201);
    }

    public function getBank($id) {
        if (Bank::where('id', $id)->exists()) {
          $bank = Bank::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($bank, 200);
        } else {
          return response()->json([
            "message" => "bank not found"
          ], 404);
        }
    }
    public function updateBank(Request $request, $id) {
        if (Bank::where('id', $id)->exists()) {
          $bank = Bank::find($id);
  
          $bank->bank_name = is_null($request->bank_name) ? $bank->bank_name : $request->bank_name;
          $bank->save();
  
          return response()->json([
            "message" => "bank record updated successfully"
          ], 200);
        } else {
          return response()->json([
            "message" => "Bank not found"
          ], 404);
        }
      }
}
