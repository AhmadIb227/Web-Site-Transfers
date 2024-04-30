<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Odd Office</title>
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
    <div class="container">
        <form class="form-container" action="{{ route('offices.store') }}" method="POST">
            @csrf
            <br>
            <label class="number1" >Nameoffice</label>
            <input class="number2" type="text" name="Nameoffice" >
            <br>
            <label class="value1" >RemainingBalance</label>
            <input class="value2" type="number" name="RemainingBalance">
            <br>
            <label class="number1" >Title</label>
            <input class="number2" type="text" name="Title">
            <br>
            <button class="btn" type="submit">Send</button>
        </form>
    </div>
</body>
</html>