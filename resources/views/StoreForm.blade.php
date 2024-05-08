<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('common.jquery')
    @include('common.bootstrap')
    <title>{{ $sTitle }}</title>
</head>
<body>
    <div class="px-5 pt-4">
        <!-- Errors encounter during validation -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Created Product -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Store Form -->
        <h3>{{ $sTitle }}</h3>
        <form method="POST" action="{{url('/App/Store/Create')}}" enctype="multipart/form-data">
            @csrf
            @if ($bIsUpdate === true)
            <div class="form-group">
                <label for="title">Store ID</label>
                <input type="text" name="id" class="form-control" disabled>
            </div>
            @endif
            <div class="form-group">
                <label for="title">Store Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Logo</label>
                <input type="file" name="logo" class="form-control">
            </div>
            <div class="form-group mt-3">
                <input type="submit" class="btn btn-primary mx-auto" value="{{ $sSubmitButtonPage }}">
            </div>
        </form>
    </div>
</body>
</html>