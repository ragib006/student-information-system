<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('student.student_login');
});



//admin dashboard  login
Route::get('/backend', function () {
    return view('admin.admin_login');
});

//admin login pannel form route
Route::post('/adminlogin','AdminController@login_dashboard');



/*

email password sothik dayour por  return(admin.dashboard) a vabe show kora jabe na  redirect use korte hove

ajon coltroller a vator rout toire korte hobe
*/
Route::get('/admin_dashboard','AdminController@admin_dashboard');


/*admin dashboard LOG-OUT    */
Route::get('/logout','AdminController@logout');

//admin dashboard -controll route------------end

Route::get('/addstudent','AddStudentsController@addstudent');

Route::get('/allstudent','AllstudentsController@allstudent');

Route::get('/tutionfee','TutionfeeController@tutionfee');

Route::get('/cse','CSEController@cse');
Route::get('/eee','EEEController@eee');
Route::get('/ipe','IPEController@ipe');
Route::get('/me','MEController@me');
Route::get('/bba','BBAController@bba');
Route::get('/civil','CIVILController@civil');


//view profile and setting route AdminController use kortechi controller hichabe
Route::get('/viewprofile','AdminController@viewprofile');
Route::get('/setting','AdminController@setting');

//add student in form fillup with routes

Route::post('/save_student','AddStudentsController@savestudent');

//ALL SYUDENT AR PAS A DELATE OPTION AR ROUTE
Route::get('/all_student_delate/{student_id}','ALLstudent_delate_controller@allstudentdelateoption');

//cse student delate routes

Route::get('/cse_student_delate/{student_id}','CSE_student_delate_controller@csestudentdelateoption');
//eee student delate  route
Route::get('/eee_student_delate/{student_id}','EEE_student_delate_controller@eeestudentdelateoption');
//ipe student delate Controller
Route::get('/ipe_student_delate/{student_id}','IPE_student_delate_controller@ipestudentdelateoption');

//bba student delate Controller
Route::get('/bba_student_delate/{student_id}','BBA_student_delate_controller@bbastudentdelateoption');

//ME student delate Controller
Route::get('/me_student_delate/{student_id}','ME_student_delate_controller@mestudentdelateoption');

//civil student delate Controller
Route::get('/civil_student_delate/{student_id}','CIVIL_student_delate_controller@civilstudentdelateoption');

//all student view routes
Route::get('/all_student_view/{student_id}','ALL_student_view_controller@allstudentviewcontroller');

//cse student view route
Route::get('/cse_student_view/{student_id}','CSE_student_view_controller@csestudentviewcontroller');

//eee student view route
Route::get('/eee_student_view/{student_id}','EEE_student_view_controller@eeestudentviewcontroller');


//ipe student view route
Route::get('/ipe_student_view/{student_id}','IPE_student_view_controller@ipestudentviewcontroller');


//bba student view route
Route::get('/bba_student_view/{student_id}','BBA_student_view_controller@bbastudentviewcontroller');


//me student view route
Route::get('/me_student_view/{student_id}','ME_student_view_controller@mestudentviewcontroller');


//civil student view route
Route::get('/civil_student_view/{student_id}','CIVIL_student_view_controller@civilstudentviewcontroller');

//all student edit routes
Route::get('/all_student_edit/{student_id}','ALL_student_edit_controller@allstudenteditcontroller');

//update all student edit routes   all student.blade.php ar form a a route dis i
//ata post method hobe karon amra form a data insert korteci
Route::post('/update_all_student/{student_id}','ALL_student_edit_update_controller@updateallstudent');




//cse student edit routes
Route::get('/cse_student_edit/{student_id}','CSE_student_edit_controller@csestudenteditcontroller');

//update csestudent edit ar form ar routes  orthat  cse student.blade.php ar form a a route dis i
//ata post method hobe karon amra form a data insert korteci   r ai route ta form a dite hobe karon nuton  student in formation ai route dhore update hobe
Route::post('/update_cse_student/{student_id}','CSE_student_edit_update_controller@updatecsestudent');




//eee student edit routes
Route::get('/eee_student_edit/{student_id}','EEE_student_edit_controller@eeestudenteditcontroller');

//update eeestudent edit ar form ar routes  orthat  eee student.blade.php ar form a a route dis i
//ata post method hobe karon amra form a data insert korteci   r ai route ta form a dite hobe karon nuton  student in formation ai route dhore update hobe
Route::post('/update_eee_student/{student_id}','EEE_student_edit_update_controller@updateeeestudent');


//ipe student edit routes
Route::get('/ipe_student_edit/{student_id}','IPE_student_edit_controller@ipestudenteditcontroller');

//update IPEstudent edit ar form ar routes  orthat  ipe student.blade.php ar form a a route dis i
//ata post method hobe karon amra form a data insert korteci   r ai route ta form a dite hobe karon nuton  student in formation ai route dhore update hobe
Route::post('/update_ipe_student/{student_id}','IPE_student_edit_update_controller@updateipestudent');


//bba student edit routes
Route::get('/bba_student_edit/{student_id}','BBA_student_edit_controller@bbastudenteditcontroller');

//update bbastudent edit ar form ar routes  orthat  bba student.blade.php ar form a a route dis i
//ata post method hobe karon amra form a data insert korteci   r ai route ta form a dite hobe karon nuton  student in formation ai route dhore update hobe
Route::post('/update_bba_student/{student_id}','BBA_student_edit_update_controller@updatebbastudent');


//me student edit routes
Route::get('/me_student_edit/{student_id}','ME_student_edit_controller@mestudenteditcontroller');

//update mestudent edit ar form ar routes  orthat  me student.blade.php ar form a a route dis i
//ata post method hobe karon amra form a data insert korteci   r ai route ta form a dite hobe karon nuton  student in formation ai route dhore update hobe
Route::post('/update_me_student/{student_id}','ME_student_edit_update_controller@updatemestudent');


//civil student edit routes
Route::get('/civil_student_edit/{student_id}','CIVIL_student_edit_controller@civilstudenteditcontroller');

//update civilstudent edit ar form ar routes  orthat  civil student.blade.php ar form a a route dis i
//ata post method hobe karon amra form a data insert korteci   r ai route ta form a dite hobe karon nuton  student in formation ai route dhore update hobe
Route::post('/update_civil_student/{student_id}','CIVIL_student_edit_update_controller@updatecivilstudent');



//add teacher routes
Route::get('/addteacher','Add_teacher_controller@addteacher');

//add teacher ar form ar action route jar maddhome database a  teacher insert hoverable
Route::post('/save_teacher','FORM_save_add_teacher_controller@saveteacher');


//all teacher route
 Route::get('/allteacher','ALLteacherController@all_teacher');


//all teacher  DELATE
Route::get('/all_teachers_delate/{teachers_id}','ALLteacher_delate_controller@allteacherdelateoption');

//all teacher viewport
Route::get('/all_teachers_view/{teachers_id}','ALLteacher_view_controller@allteacherview');
//all teacher oci_set_edit
Route::get('/all_teacher_edit/{teachers_id}','ALLteacher_edit_controller@allteacheredit');

//update all student edit routes   all student.blade.php ar form a a route dis i
//ata post method hobe karon amra form a data insert korteci

Route::post('/update_all_teacher/{teachers_id}','ALL_teacher_edit_update_controller@allteacherupdate');


//student login pannel form action routes
Route::post('/studentlogin','Student_login_controller@login_student_dashboard');
//student login redirect page

Route::get('/student_dashboard','Student_login_controller@dashboardforstudent');

//student see  all teacher route
Route::get('/student_show_all_teacher','Student_show_all_teacher_controller@studentshowallteacher');

//student own profile route  call myprofile

Route::get('/profile' ,'My_profile_controller@username');

//student logout route

Route::get('/student_logout','Student_logout_controller@studentlogout');

//student setting route
Route::get('/student__setting','Student_setting_controller@studentsetting');

//update student setting edite route student_setting.blade.php ar form a route dis i atan
//ata post method hobe karon amra form a data insert korte
Route::post('/student_updtade_setting','Student_update_setting_controller@studentupdatesetting');

//admin profile view route
Route::get('/admin_profile_view','Admin_profile_view_controller@adminprofileview');

//admin password change route

Route::get('/admin_password_change','Admin_password_change_controller@adminpasswordchange');

//admin password updare
Route::post('/admin_password_update','Admin_change_password_update_controller@adminpasswordupdate');

//admin logo change route
Route::get('/admin_logo','Admin_logo_controller@adminlogo');

//admin logo change form action

Route::post('/admin_logo_change_formaction','Admin_logo_change_Form_Action_controller@adminlogochangeformaction');

//ALL LOGO
Route::get('/all_logo','Admin_alllogo_controller@adminalllogo');


Route::get('/active_logo_unactive_route/{logo_id}','Active_logo_goto_unactive_controller@active_logo_unactive');
Route::get('/unactive_logo_active_route/{logo_id}','Un_active_logo_goto_active_controller@unactive_logo_active');

Route::get('/all_logo_delate/{logo_id}','ALL_LOGO_DELATE_CONTROLLER@alllogodelate');
