@extends('layouts.print.print')
@section('content')
    <center>
        <div>
            <h5>Progress Report</h5>
            <table id="customers">
                <tbody>
                <tr>
                    <th scope="row">اسم الطالب</th>
                    <td>{{$student_name}}</td>
                </tr>
                <tr>
                    <th scope="row">الدرجة</th>
                    <td>{{$degree}}</td>
                </tr>
                <tr>
                    <th scope="row">فئة الشهادة</th>
                    <td>{{$certification_category}}</td>
                </tr>
                <tr>
                    <th scope="row">الفئة</th>
                    <td>{{$class}}</td>
                </tr>
                <tr>
                    <th scope="row">رقم الشهادة</th>
                    <td>{{$roll_no}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </center>
@endsection
