@extends('index')
@section('content')
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Ma So Dai Ly</th>
                <th scope="col">Ten dai ly</th>
                <th scope="col">Dien thoai</th>
                <th scope="col">Email</th>
                <th scope="col">Dia chi</th>
                <th scope="col">Ten nguoi quan ly</th>
                <th scope="col">Trang Thai</th>
                <th scope="col">Chuc Nang</th>
            </tr>
            </thead>
            <tbody>
            @forelse($values as $key=>$agency)
                <tr>
                    <td>{{$agency->id}}</td>
                    <td>{{$agency->name_agency}}</td>
                    <td>{{$agency->phone}}</td>
                    <td>{{$agency->email}}</td>
                    <td>{{$agency->address}}</td>
                    <td>{{$agency->employee->name}}</td>
                    <td>{{$agency->status->status}}</td>
                    {{--<td>
                        <a href="{{route('agency.delete'),$agency->id}}">Delete</a>
                        <br>
                        <a href="{{route('agency.edit'),$agency->id}}">Update</a>
                    </td>--}}
                </tr>
            @empty
                <p>No Agency</p>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
