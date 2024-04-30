<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input-Transfers</title>
    <style>
        body {
            background-color: #BDE0FE;
            text-align: center;
            color: rgb(12, 12, 11);
         }

        marquee {
            margin-top: 20px;
            color: #000;
            font-weight: bold;
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

        .error-message {
            color: red;
            font-weight: bold;
            margin-top: 5px;
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
            transform: translateY(0); /* إعادة البطن إلى وضعه الأصلي عند التحويم */
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <marquee behavior="scroll" direction="left">
        This page is competent to enter transfers   
    </marquee>
    <div class="container">
        <form class="form-container" action="{{ route('transfers.store') }}" method="POST">
            @csrf
            <br>
            <label class="number1" for="number">Number of transfer</label>
            <input class="number2" type="number" name="number" >
            <br>
            <label class="number1" for="number">The Sender</label>
            <input class="number2" type="text" name="Sender" >
            <br>
            <label class="send1" for="send">Send Office</label>
            <select class="send2" name="send" >
                @foreach($offices as $office)
                <option value="{{ $office->id }}">{{ $office->Nameoffice }}</option>
                @endforeach
            </select>
            <br>
            <label class="Recipient1" for="recipient">Recipient Office</label>
            <select class="Recipient2" name="recipient" >
                @foreach($offices as $office)
                <option value="{{ $office->id }}">{{ $office->Nameoffice }}</option>
                @endforeach
            </select>
            <br>
            <label class="number1" for="number">The Receiver</label>
            <input class="number2" type="text" name="Receiver" >
            <br>
            <label class="value1" for="value">Transfer Value</label>
            <input class="value2" type="number" name="value">
            <br>
            <label class="date1" for="date">Transfer Date</label>
            <input class="date2" type="date" name="date">
            <br>
            <button class="btn" type="submit">Send</button>
        </form>
    </div>
</body>
</html>