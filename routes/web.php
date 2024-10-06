<?php
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.index');
});

// Route::get('students',[StudentController::class,'index']);

// Route::get('subjects',[SubjectController::class,'index']);

// Route::get('grades',[GradeController::class,'index']);

// Route::get('/login', function () {
//     return view('pages.login');
// });

// Route::get('/register', function () {
//     return view('pages.register');
// });

// Route::get('/password', function () {
//     return view('pages.password');
// });

// Route::get('/401', function () {
//     return view('pages.401');
// });

// Route::get('/404', function () {
//     return view('pages.404');
// });

// Route::get('/500', function () {
//     return view('pages.500');
// });

// Route::get('/chart', function () {
//     return view('pages.chart');
// });

// Route::get('/chart', function () {
//     return view('pages.chart');
// });

// Route::get('/layout-static', function () {
//     return view('pages.layout-static');
// });
// //****** Student Route ******/

// Route::get('/students', function () {
//     $students=Student::All();
//     return view('student.index',compact('students'));
// });

// Route::get('/student/{id}', function ($id) {
//     $student=Student::find($id);
//     return view('student.show',compact('student'));
// });







// //****** Grade Route ******/

// Route::get('/grades',function(){
//     $grades=Grade::all();
//     return view('grade.index',compact('grades'));
// });

// Route::get('/grade/{id}', function ($id) {
//     $grade=Grade::find($id);
//     $students=Grade::find($id)->students;
//     return view('grade.show',compact('grade','students'));
// });






// // ******Subject Route******//
// Route::get('/subjects',function(){
//     $subjects=Subject::all();
//     return view('subject.index',compact('subjects'));
// });

// Route::get('/subject/{id}', function($id){
//     $subject=Subject::find($id);
//     return view('subject.show',compact('subject'));
// });



// Route::get('students',[StudentController::class,'index']);
// Route::resource('students',StudentController::class);
// Route::resource([
//     'students',StudentController::class,
//     'grades',GradeController::class,
//     'subjects',SubjectController::class
// // ]);
// Route::resource('students',StudentController::class);
// Route::resource('subjects',SubjectController::class);
// Route::resource('grades',GradeController::class);
