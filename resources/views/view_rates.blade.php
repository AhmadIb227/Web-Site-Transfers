<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> View-Transfers</title>
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #BDE0FE;
        }

        table {
            display: block;
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        
        ul {
        list-style: none; /* إزالة النقاط من القائمة */
        overflow: visible; /* ضمان ظهور المحتوى المتجاوز */
        }

        li {
        display: block;
        margin-bottom: 20px; /* إضافة مسافة بين الجداول */
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: ffffff;
        }

        th {
            background-color: #BDE0FE;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #A2D2FF;
        }

        tr:nth-child(odd) {
            background-color: #CDB4DB;
        }
    </style>
</head>
<body>
    @foreach ($rates->sortByDesc('date') as $rate) 
        <ul>
            <li>
                <table>
                    <thead>
                        <tr>
                            <th>التاريخ</th>
                            <th>سعر الدولار الأمريكي</th>
                            <th>سعر اليورو</th>
                            <th>سعر الليرة السورية</th>
                            <th>سعر الليرة التركية</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $rate->date }}</td>
                            <td>{{ $rate->usd_rate }}</td>
                            <td>{{ $rate->eur_rate }}</td>
                            <td>{{ $rate->sy_rate }}</td>
                            <td>{{ $rate->tr_rate }}</td>
                        </tr>
                    </tbody>
                </table>
            </li>
        </ul>
    @endforeach
</body>
</html>