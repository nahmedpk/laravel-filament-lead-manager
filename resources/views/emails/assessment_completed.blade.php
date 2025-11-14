<!DOCTYPE html>
<html>
<head>
    <title>Assessment Completed</title>
</head>
<body>
    <h1>Assessment Completed</h1>
    <p>Hi Admin,</p>
    <p>The following assessment has been completed:</p>

    <ul>
        <li><strong>User:</strong> {{ $assessment->user_name }}</li>
        <li><strong>Score:</strong> {{ $assessment->score }}</li>
        <li><strong>Completed At:</strong> {{ $assessment->completed_at->format('d M Y H:i') }}</li>
    </ul>

    <p>Thank you.</p>
</body>
</html>
