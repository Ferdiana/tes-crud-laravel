<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction Details</title>
</head>
<body>
    <h1>Transaction Details</h1>

    <p>Name: {{ $transaction->name }}</p>
    <p>Phone Number: {{ $transaction->phone_number }}</p>
    <p>Start Date: {{ $transaction->start_date }}</p>
    <p>End Date: {{ $transaction->end_date }}</p>
    <img src="{{ Storage::url($transaction->image_path) }}" alt="Transaction Image">
    

    <h2>Associated Cart Items</h2>
    
        <ul>
            @foreach($transactionItems as $transactionItem)
                <li>
                    Product Name: {{ $transactionItem->product->nama }}<br>
                    Quantity: {{ $transactionItem->quantity }}<br>
                    Price: {{ $transactionItem->price }}<br>
                    
                </li>
            @endforeach
        </ul>
        Price: {{ $transactionItem->transaction->invoice_number }}<br>

    <a href="{{ route('transactions.download', $transaction) }}" class="btn btn-primary">Download Details</a>
    <a href="{{ route('transactions.index') }}">Back to Transactions</a>
</body>
</html>
