<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #BDE0FE;
            text-align: center;
            color: rgb(12, 12, 11);
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input, select {
            margin-top: 5px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            transition: transform 0.3s ease;
        }

        input:hover, select:hover {
            transform: translateX(5px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        input[type="submit"] {
            background-color: #A2D2FF;
            color: wheat;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #CDB4DB;
        }
        .btn {
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
            margin-top: 10px; /* تعديل المسافة العلوية */
            margin-bottom: 10px; /* تعديل المسافة السفلية */
            transform: translateY(10px); /* النزول للأسفل بمقدار 10 بكسل */
            transition: transform 0.3s ease;
        }
        .btn:hover {
            transform: translateY(0);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="form-container" action="{{ route('save_rates') }}" method="POST">
            @csrf
            <br>
            <label for="currency">Choose the currency</label><br>
            <select name="currency" id="currency">
                @foreach ($currencies as $currency)
                    <option name="currency" value="{{ $currency->id }}">{{ $currency->name }}</option>
                @endforeach
            </select>
            <br>
            <label for="date"> The History: </label><br>
            <input type="date" name="date" id="date">
            <br>
            <label for="usd_rate">US Dollar rate: </label><br>
            <input type="text" name="usd_rate" id="usd_rate">
            <br>
            <label for="eur_rate"> The price of the euro:</label><br>
            <input type="text" name="eur_rate" id="eur_rate">
            <br>
            <label for="sy_rate">The price of the Syrian lira:</label><br>
            <input type="text" name="sy_rate" id="sy_rate">
            <br>
            <label for="tr_rate">The price of the Turkish lira:</label><br>
            <input type="text" name="tr_rate" id="tr_rate">
            <br>
            <button class="btn" type="submit">Send</button>
        </form>
    </div>
</body>
</html>
