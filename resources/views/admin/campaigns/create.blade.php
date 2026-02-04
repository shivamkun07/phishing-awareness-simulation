<!DOCTYPE html>
<html>
<head>
    <title>Create Campaign</title>
</head>
<body>

<h2>Create Phishing Campaign</h2>

<form method="POST" action="{{ route('campaigns.store') }}">
    @csrf

    <label>Campaign Name</label><br>
    <input type="text" name="name"><br><br>

    <label>Target Email</label><br>
    <input type="email" name="target_email"><br><br>

    <label>Phishing URL</label><br>
    <input type="text" name="phishing_url"><br><br>

    <button type="submit">Create</button>
</form>

</body>
</html>
