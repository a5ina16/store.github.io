<?php

namespace App\Http\Controllers;

use App\Models\Product;  // تأكد من استيراد نموذج الـ Product
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // طريقة حذف المنتج باستخدام ID
    public function destroy($id)
    {
        // العثور على المنتج باستخدام ID
        $product = Product::find($id);

        // التحقق إذا كان المنتج موجودًا
        if ($product) {
            // حذف المنتج من قاعدة البيانات
            $product->delete();

            // إعادة التوجيه إلى صفحة لوحة الإدارة مع رسالة نجاح
            return redirect()->route('panel')->with('success', 'Product deleted successfully.');
        }

        // إذا لم يتم العثور على المنتج، إعادة التوجيه مع رسالة خطأ
        return redirect()->route('adminpanel')->with('error', 'Product not found.');
    }
}

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    // يمكن إضافة وظائف مشتركة هنا في المستقبل
}



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // التحقق من أن حقل username يساوي "unk" وكلمة المرور تساوي "2005"
        if ($request->username === 'unk' && $request->password === '2005') {
            // تسجيل دخول وهمي للمصادقة
            session(['authenticated' => true]);
            return redirect()->intended('adminpanel');
        } else {
            // إعادة توجيه إلى صفحة تسجيل الدخول مع رسالة خطأ
            return redirect()->back()->with('error', 'الاسم أو الباسورد خاطئ');
        }
    }
}
