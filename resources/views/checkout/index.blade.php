<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body>
    <h1>Invoice</h1>
    <p>Dear costumer, the shop thanks you for your purchases.</p>
    <p>Below you can find the payment instructions.</p>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Amount</td>
                <td>Time</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->amount}}</td>
                <td>{{$order->created_at}}</td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>