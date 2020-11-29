<?php

namespace App\Http\Controllers\Web\General;

use App\Http\Controllers\Web\BaseController;
use App\Models\Auth\Role;
use App\Models\Website\Donation;
use App\Models\Website\GetTouch;
use App\Models\Website\Help;
use App\Models\Website\StoreRequestQuote;
use App\Modules\Backend\Authentication\Role\Repositories\RoleRepository;
use App\Modules\Backend\Authentication\User\Repositories\UserRepository;
use App\Modules\Backend\Website\Post\Repositories\PostRepository;
use App\Modules\Frontend\Website\Slider\Repositories\SliderRepository;
use App\Save;
use http\Exception\UnexpectedValueException;
use http\Message\Body;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
use PhpParser\Node\Expr\PostDec;
use Auth;
use Session;
use Models;


class HomeController extends BaseController
{
    private $sliderRepository, $view_data, $postRepository;
    private $roleRepository;
    private $userRepository;
    private $request;

    public function __construct(SliderRepository $sliderRepository,
                                PostRepository $postRepository,
                                RoleRepository $roleRepository,
                                UserRepository $userRepository,
                                Request $request)
    {
        $this->sliderRepository = $sliderRepository;
        $this->postRepository = $postRepository;
        $this->roleRepository = $roleRepository;
        $this->userRepository = $userRepository;
        $this->request = $request;

        parent::__construct();
    }

    public function index()
    {
        return view('web.pages.index');
    }

    public function resetPasswordWithCode($code)
    {
        $isUser = false;
        if ($code === '' && $code === null) {
            $isUser = false;
        }
        $user = $this->userRepository->findByFirst('password_change_code', $code, '=');
        if ($user) {
            $isUser = true;
        }

        return view('auth.changePassword', compact('user', 'isUser', 'code'));

    }

    public function resetPasswordStore()
    {
        try {
            $user = $this->userRepository->findByFirst('password_change_code', $this->request->code, '=');
            $data['password'] = bcrypt($this->request->password);
            $userData = $this->userRepository->update($data, $user->id);
//            $this->sendResetLinkEmail($request);
            session()->flash('success', 'New password has been save successfully.Please login with your credentials');
            return redirect()->route('login');

        } catch (\Exception $e) {
//            $this->log->error('User update : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }


    }


    public function slug($slug = null, Request $request)
    {
        $slug = $slug ? $slug : 'index';
        $this->view_data['pageContent'] = $this->postRepository->findBySlug($slug, false);
        $this->view_data['banners'] = $this->postRepository->findById(1);

        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'web/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        if (file_exists($file_path)) {
            switch ($slug) {
                case 'index':
                    $this->view_data['banners'] = $this->postRepository->findById(1);
                    $this->view_data['services'] = $this->postRepository->findBy('type', 'services', '=',false,3);
                    $this->view_data['blog'] = $this->postRepository->findBy('type', 'news', '=',false);
                    $this->view_data['testimonial'] = $this->postRepository->findBy('type', 'testimonial', '=');
                    $this->view_data['product']=$this->postRepository->findBy('type','products','=');
                    $this->view_data['get_touch']=$this->postRepository->findById(8);
                    $this->view_data['user']=$this->userRepository->findById(4);
                    $this->view_data['about']=$this->postRepository->findById(7);
                    $this->view_data['skill']=$this->postRepository->findBy('type','skill','=');
                    break;
                default:
                    break;
            }
                    return view('web.pages.' . $slug, $this->view_data);
        }
        // 3. No page exist (404)
        return view('web.pages.404', $this->view_data);

    }


    public function singleBlog($slug = null, Request $request){

        $slug = $slug ? $slug : 'hello';
        $this->view_data['pageContent'] = $this->postRepository->findBySlug('/single-blog/'.$slug, false);
        $this->view_data['blog'] = $this->postRepository->findBy('slug', $slug, '=', false, 6);
        $this->view_data['blogs'] = $this->postRepository->findBy('type', 'news', '=', false, 3);
        $this->view_data['user']=$this->userRepository->findById(4);


        return view('web.pages.single-blog' , $this->view_data);

    }


    public function Help(Request $request){
        try {
            $help = new Help();
            $help->name = $request->name;
            $help->phone = $request->phone;
            $help->email = $request->email;
            $help->problem = $request->problem;
            $help->message = $request->message;
            $help->save();
            session()->flash('success',"We will Contact you soon");
            return  redirect('/');


        }catch (\UnexpectedValueException $e){

        }
    }
    public function GetTouch(Request $req){
        try {
            $qoute_request = new GetTouch();
            $qoute_request->name = $req->name;
            $qoute_request->subject = $req->subject;
            $qoute_request->email = $req->email;
            $qoute_request->message = $req->message;
            $qoute_request->save();
            session()->flash('success',"Your Message has been sent");
        }catch (UnexpectedValueException $e){}
        return redirect("/");

    }

}
