<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Contact Us</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center p-2">
            <div class="col-md-8">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">Contact Us</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('contactme.submit') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Your Name">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" aria-describedby="emailHelp" placeholder="Your Email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" id="message" rows="10">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
