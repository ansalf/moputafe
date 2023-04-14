@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Players</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Money</th>
                                    <th>Position</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($players as $player)
                                    <tr>
                                        <td>{{ $player->name }}</td>
                                        <td>{{ $player->money }}</td>
                                        <td>{{ $player->position }}</td>
                                        <a href="{{ route('players.show', $player) }}" class="btn btn-primary">View</a>
                                        <a href="{{ route('players.edit', $player) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('players.destroy', $player) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection