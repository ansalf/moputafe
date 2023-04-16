@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <!-- Choose your piece -->
                        Choose Your Piece
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('board') }}">
                            @csrf

                            <div class="form-group">
                                <label for="piece">Select your piece:</label>
                                <select name="piece" id="piece" class="form-control">
                                    <option value="car">Car</option>
                                    <option value="hat">Hat</option>
                                    <option value="dog">Dog</option>
                                    <option value="ship">Ship</option>
                                </select>
                            </div>

                            <!-- Send player ID as a hidden input field -->
                            <input type="hidden" name="player_id" value="{{ $player->id }}">

                            <!-- Submit the form to start the game -->
                            <button type="submit" class="btn btn-primary">Start Game</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
