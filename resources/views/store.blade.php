<!DOCTYPE html>
<html lang="en">
<head>
</head>
{{ $rec_id }}
<body>
<script type="text/javascript">
    window.parent.postMessage('{{ $rec_id }}', '*');
</script>
</body>
</html>
