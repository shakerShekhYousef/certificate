@extends('layouts.print.print')
@section('content')
    <center>
        <div>
            <h5>Progress Report</h5>
            <table id="customers">
                <tbody>
                <tr>
                    <th scope="row">Name of the Student :</th>
                    <td>{{$student_name}}</td>
                </tr>
                <tr>
                    <th scope="row">Degree :</th>
                    <td>{{$degree}}</td>
                </tr>
                <tr>
                    <th scope="row">Certification Category :</th>
                    <td>{{$certification_category}}</td>
                </tr>
                <tr>
                    <th scope="row">Class :</th>
                    <td>{{$class}}</td>
                </tr>
                <tr>
                    <th scope="row">Certificate No. :</th>
                    <td>{{$roll_no}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </center>
@endsection
