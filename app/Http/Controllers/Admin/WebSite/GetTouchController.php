<?php


namespace App\Http\Controllers\Admin\WebSite;

use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Website\GetTouch\Repositories\GetTouchRepository;
use Yajra\DataTables\Facades\DataTables;

class GetTouchController extends BaseController
{

    private $GetTouchRepository;

    /**
     * UserController constructor.
     * @param GetTouchRepository $GetTouchRepository
     */
    public function __construct(GetTouchRepository $GetTouchRepository)
    {
        $this->GetTouchRepository = $GetTouchRepository;
    }

    public function index()
    {

        $this->authorize('read', $this->GetTouchRepository->getModel());
        if (\request()->ajax()) {
            $get_touch = $this->GetTouchRepository->getAllForDataTable();
            return DataTables::of($get_touch)
                ->addColumn('action', function ($get_touch) {
                    $data = $get_touch;
                    $name = 'dashboard.gettouch';
                    $view = true;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'))->render();
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);

        }
        return $this->view('web-site.gettouch.index');
    }
}