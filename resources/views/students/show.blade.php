@extends('students.layout')
@section('student')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
        <div class="card-body">
            <table style="width: 100%;text-align:center">
                <thead>
                    <th style="border: 1px solid black">Name</th>
                    <th style="border: 1px solid black">address</th>
                    <th style="border: 1px solid black">phone</th>
                </thead>
                <tbody>
                    <tr>
                        <td style="border: 1px solid black">{{ $students->name }}</td>
                        <td style="border: 1px solid black">{{ $students->address }}</td>
                        <td style="border: 1px solid black">{{ $students->mobile }}</td>
                    </tr>
                </tbody>
            </table>
            {{-- <h5 class="card-title">Name : {{ $students->name }}</h5>
            <p class="card-text">Address : {{ $students->address }}</p>
            <p class="card-text">Phone : {{ $students->mobile }}</p> --}}
        </div>
  </div>
</div>
