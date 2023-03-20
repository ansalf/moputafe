@extends('layouts.app')

@section('content')
    <h1>Daftar Pemain</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Uang</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->money }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
