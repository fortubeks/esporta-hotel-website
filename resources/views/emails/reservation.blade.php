<!DOCTYPE html>
<html>

<head>
    <title>Reservation Confirmation</title>
</head>

<body>
    <h1>Reservation Confirmation</h1>
    <p>Dear {{ $data['name'] }},</p>
    <p>Thank you for your reservation at Esporta Hotels & Resorts.</p>
    <p><strong>Details:</strong></p>
    <ul>
        <li>Location: {{ $data['location'] }}</li>
        <li>Rooms: {{ $data['rooms'] }}</li>
        <li>Check-in Date: {{ $data['checkin_date'] }}</li>
        <li>Check-out Date: {{ $data['checkout_date'] }}</li>
        <li>Adults: {{ $data['adults'] }}</li>
        <li>Children: {{ $data['children'] }}</li>
        <li>Name: {{ $data['name'] }}</li>
        <li>Email: {{ $data['email'] }}</li>
        <li>Phone: {{ $data['phone'] }}</li>
        <li>Message: {{ $data['message'] }}</li>
    </ul>
    <p>We look forward to welcoming you!</p>
</body>

</html>