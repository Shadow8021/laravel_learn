<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Contracts\Support\Responsable;
use App\Http\Controllers\userController;
use App\Http\Controllers\coursController;

Route::get('/', function () {
    return view('welcome');
});
 $users =[
    1=>["noms"=>"John doe", "email"=>"johndeo@gmail.fr","age"=>"15"],
    2=>["noms"=>"shadow", "email"=>"shadow@gmail.fr","age"=>"18"],
    3=>["noms"=>"oko", "email"=>"oko@gmail.fr","age"=>"19"],
];

Route::get('/users/{id}/{name}',function($id,$name) use($users){
    return ($users[$id]);
  

}
);

Route::get('/momo',function(Request $Request){
    return [
        "name"=>$Request->query("info"),
        
    ];
}
);

Route::prefix("user")->group(function(){
    Route::get("/userA",function(){
        return "userAAAA";
    })->name("userAAAAA");
    Route::get("/userB",function () {
        return "userBBB";
    })->name("userBBB");
});



Route::get("users", [userController::class,'users']
);
Route::get("cours",[coursController::class,'index']);

Route::prefix('formation')->group(function(){
    Route::get("cyber/{form}",function($form){
        return $form;
    })->name("cyber Route");
    Route::get('reseau/{form}',function($form){
        return $form;
    })->name('reseau Route');


});