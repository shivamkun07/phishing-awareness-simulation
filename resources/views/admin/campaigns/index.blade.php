<!DOCTYPE html>
<html>
<head>
    <title>Campaign List</title>
</head>
<body>

<h2>Phishing Campaigns</h2>

<a href="{{ route('campaigns.create') }}">➕ Create Campaign</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Target Email</th>
        <th>Phishing URL</th>
        <th>Action</th>
    </tr>

    @foreach($campaigns as $campaign)
    <tr>
        <td>{{ $campaign->id }}</td>
        <td>{{ $campaign->name }}</td>
        <td>{{ $campaign->target_email }}</td>
        <td>{{ $campaign->phishing_url }}</td>
        <td>
            <form method="POST" action="{{ route('campaigns.destroy', $campaign) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
