<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('common.jquery')
    @include('common.bootstrap')
    <title>Document</title>
</head>
<body>
    <div class="px-5 pt-4">
        <h3>{{ $sTitle }}</h3>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Store ID</label>
                <input type="text" name="id" class="form-control" {{ $bIsUpdate ? 'disabled' : '' }}>
            </div>
            <div class="form-group">
                <label for="title">Store Name</label>
                <input type="text" name="store_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control"></textarea>
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