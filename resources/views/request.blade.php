<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventory List</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>


<div class="container">
        <h5>Inventory List</h5>
    <form method="post" action="/addrecord">
    <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Total</th>
                <th>Remain</th>
                <th>Request</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <input type="hidden" name="name[]" value="{{ $item->name }}">
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->total }}</td>
                    <td>{{ $item->remain }}</td>
                    <td><input name="value[]" type="number" max="{{ $item->remain }}"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="form-group"> <!-- Message field -->
            <label class="control-label " for="message">Description</label>
            <textarea class="form-control" cols="40" id="message" name="message" rows="2"></textarea>
        </div>

        {{ csrf_field() }}
        <div class="text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>

<script type="text/javascript">
//    window.parent.postMessage('request page loaded - form iframe', '*');
</script>
</body>
</html>
