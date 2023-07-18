<?php

namespace App\Http\Controllers;

use App\Exceptions\GeneralException;
use App\Http\Requests\admin\Certificate\CreateCertificateRequest;
use App\Models\Certificate;
use App\Repositories\admin\CertificateRepository;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public $certificateRepository;

    public function __construct(CertificateRepository $certificateRepository)
    {
        $this->certificateRepository = $certificateRepository;
    }

    public function certificate_list(Request $request){
        if ($request->ajax()){
            $data = Certificate::query();
            try {
                $data->get();
                return datatables($data)
                    ->addColumn('checkbox', function ($item) {
                        return '<input type="checkbox" id="'.$item->id.'" name="someCheckbox" />';
                    })->addColumn('action', function ($item) {
                        return '<div class="activity-icon">
                     <ul style="list-style: none">
                        <li><a id="delete" data-certificate="'.$item->id.'" data-url="' . route('certificates_delete') . '" class=""><i class="mdi mdi-trash-can"></i></a></li>
                        <li><a  href="' . route('certificates.edit', $item->id) . '" class=""><i class="mdi mdi-grease-pencil"></i></a></li>
                        <li><a  href="' . route('certificates.show', $item->id) . '" class=""><i class="mdi mdi-eye"></i></a></li>
                     </ul>
                </div>';
                    })->rawColumns(['checkbox','action'])->make(true);
            } catch (\Exception $e) {
                return new GeneralException($e);
            }
        }
        return view('admin.certificate.index');
    }


    public function create()
    {
        return view('admin.certificate.create');
    }


    public function store(CreateCertificateRequest $request)
    {
        $this->certificateRepository->create($request->all());
        session()->flash('success', 'Certificate has been added successfully!');
        return redirect()->back();
    }


    public function show(Certificate $certificate)
    {
        return view('admin.certificate.show',compact('certificate'));
    }


    public function edit(Certificate $certificate)
    {
        return view('admin.certificate.edit',compact('certificate'));
    }


    public function update(Request $request, Certificate $certificate)
    {
        $this->certificateRepository->update($request->all(),$certificate);
        session()->flash('success', 'Certificate has been updated successfully!');
        return redirect()->back();
    }


    public function delete_certificate(Request $request){
        $this->certificateRepository->deleteById($request->id);
        session()->flash('success', 'Certificate has been deleted successfully!');
    }
}
