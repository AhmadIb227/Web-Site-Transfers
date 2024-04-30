<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify</title>
    <style>
         .form1 {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .sea1 {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 10px;
        }

        .btn-grad {
            background-image: linear-gradient(to right, #BDE0FE, #4D8CCF);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-grad:hover {
            background-image: linear-gradient(to right, #4D8CCF, #BDE0FE);
        }  
    </style>
</head>
<body>
    <form action="{{ route('transfers.Verify') }}" method="POST" class="form1" >
        @csrf
        <input type="text" name="Verify" placeholder="Verify by Transfer Number" class="sea1">
        <button type="submit" class="btn-grad">Verify</button>
    </form> 
</body>
</html>