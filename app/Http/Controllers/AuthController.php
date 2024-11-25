<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // التحقق من اسم المستخدم وكلمة المرور
        if ($request->username === 'unk' && $request->password === '2005') {
            session(['authenticated' => true]); // تخزين الجلسة عند نجاح الدخول
            return redirect()->route('adminpanel');
        }

        return redirect()->back()->with('error', 'بيانات الدخول غير صحيحة');
    }
}
