<?php

namespace App\Repositories\admin;

use App\Exceptions\GeneralException;
use App\Models\Certificate;
use App\Repositories\BaseRepository;
use App\Traits\UploadFile;
use Illuminate\Support\Facades\DB;

class CertificateRepository extends BaseRepository
{
    use UploadFile;

    public function model()
    {
        return Certificate::class;
    }

    public function create(array $data)
    {
        return DB::transaction(function () use ($data){
            $certificate = parent::create([
                'class'=>$data['class'],
                'roll_no'=>$data['roll_no'],
                'student_name'=>$data['student_name'],
                'degree'=>$data['degree'],
                'certification_category'=>$data['certification_category'],
                'file'=>isset($data['file']) ?
                    $this->UploadFile($data['file'],CERTIFICATE_IMG_PATH.'/'.$data['student_name']) : null
            ]);
            return $certificate;
        });
        throw new GeneralException('error');
    }

    public function update(array $data, Certificate $certificate){
        return DB::transaction(function () use ($data,$certificate){
           if ($certificate->update([
               'class'=>isset($data['class']) ? $data['class'] : $certificate->class,
               'roll_no'=>isset($data['roll_no']) ? $data['roll_no'] : $certificate->roll_no,
               'student_name'=>isset($data['student_name']) ? $data['student_name'] : $certificate->student_name,
               'degree'=>isset($data['degree']) ? $data['degree'] : $certificate->degree,
               'certification_category'=>isset($data['certification_category']) ? $data['certification_category'] : $certificate->certification_category,
               'file'=>isset($data['file']) ?
                   $this->UploadFile($data['file'],CERTIFICATE_IMG_PATH.'/'.$data['student_name']) : null
           ])){
               return $certificate;
           }
        });
        throw new GeneralException('error');
    }
}
