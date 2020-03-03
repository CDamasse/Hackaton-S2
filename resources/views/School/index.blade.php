@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row justify-content-center">
                    <h1>Etape 2</h1>
                </div>
                <form action="" method="POST">
                    <div class="form-group row">
                        <label for="actual_school" class="col-md-4 col-form-label text-md-right"> Ecole
                            actuelle </label>

                        <div class="col-md-6">
                            <input type="text" id="actual_school" class="form-control" name="actual_school"
                                   value="{{ old('actual_school') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="positive" class="col-md-4 col-form-label text-md-right"> + </label>

                        <div class="col-md-6">
                        <textarea type="text" id="positive" class="form-control" name="positive"
                                  value="{{ old('positive') }}">
                        </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="negative" class="col-md-4 col-form-label text-md-right"> - </label>

                        <div class="col-md-6">
                        <textarea type="text" id="negative" class="form-control" name="negative"
                                  value="{{ old('negative') }}">
                        </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="school_note" class="col-md-4 col-form-label text-md-right"> Note </label>

                        <div class="col-md-6">
                            <select type="text" id="school_note" class="form-control" name="school_note"
                                    value="{{ old('school_note') }}">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary"> Etape suivante </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
