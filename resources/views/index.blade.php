<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <title>DataTables</title>
    </head>
    <body>
        <div class="container">
            <table id="users" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Email</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#users').DataTable({
                    "serverSide": true,
                    "ajax": "{{ url('api/users') }}",
                    "columns": [
                        { data: 'id'},
                        { data: 'name'},
                        { data: 'email'},
                        { data: 'btn'},
                    ]
                });
            } );
        </script>
    </body>
</html>
