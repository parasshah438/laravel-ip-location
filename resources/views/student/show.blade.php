@extends('layouts.default')
@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-5">
                    <h2><b>Location Information</b></h2>
                </div>
                
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>IP</th>
                    <th>Country</th>
                    <th>Region</th>                       
                    <th>City</th>
                    <th>ZipCode</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data->ip ?? ''}}</td>
                    <td>{{$data->countryName ?? ''}}</td>
                    <td>{{$data->regionName ?? ''}}</td>
                    <td>{{$data->cityName ?? ''}}</td>
                    <td>{{$data->zipCode ?? ''}}</td>
                    <td>{{$data->latitude ?? ''}}</td>
                    <td>{{$data->longitude ?? ''}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>     
@endsection                                                                 