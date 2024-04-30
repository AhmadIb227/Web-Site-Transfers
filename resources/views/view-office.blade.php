<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View-Offices</title>
    <style>
        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
        }
    
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    
        th {
            background-color: #BDE0FE;
            color: #000;
            font-weight: bold;
        }
    
        tr:nth-child(even) {
            background-color: #A2D2FF;
            color: #000;
        }
    
        tr:nth-child(odd) {
            background-color: #e0f8ff;
            color: #000;
        }
        .btn-grad {
            margin-left: 50%;
            margin-top: 50%;
            text-align: center;
            background-color: #4D8CCF; /* لون أزرق غامق */
            color: white;
            padding: 7px 12px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
        }

        .btn-grad:hover {
            background-color: #3A6B9E; /* لون أزرق غامق عند التحويم */

        }
       
    </style>
</head>
<body>
    
    <table>
        @foreach ($office as $of)
            <tr>
                <td>{{ $of->Nameoffice }}</td>
            </tr>
        @endforeach
    </table>
    @if(Gate::allows('viewaddofice',auth()->user()))
        <a href="{{ route('addOffice') }}" class="btn-grad">Add Office</a>
    @endif
</body>
</html>

