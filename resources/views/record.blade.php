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

    <h3>Inventory List</h3>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Request</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rec->inventory_id as $key=>$val)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $key }}</td>
                <td>{{ $val }}</td>
            </tr>
        @endforeach
        <tr>
        </tbody>
    </table>

    <h3>Description</h3>
    {{ $rec->description }}
</div>

<script type="text/javascript">
    window.parent.postMessage({form_id: 17}, '*');
</script>
</body>
</html>
