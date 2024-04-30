<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View-Transfers</title>
    <style>
       /* تنسيق الجدول */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 6px;
        }

        table, td {
            border: 1px solid #ddd;
        }

        td {
            padding: 1px;
            text-align: center;
        }
        th{
            color: #4D8CCF
        }

        /* تنسيق الصفوف المتناوبة */
        tr:nth-child(even) {
            background-color: #F0EEF1;
        }

        /* تنسيق أزرار الإلغاء والحذف */
        button {
        background-color: #4D8CCF; /* لون أزرق غامق */
        color: white;
        padding: 7px 12px;
        margin: 5px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        font-weight: bold;
        }

        button:hover {
            background-color: #3A6B9E; /* لون أزرق غامق عند التحويم */
        }

        /* تنسيق زر 
        الحذف بشكل خاص */

        .deletebtn:hover {
            background-color: #D32F2F;
        }

        /* تنسيق حقل البحث */
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
<body > 
    <form action="{{ route('transfers.search') }}" method="get" class="form1" class="center">
        <input type="text" name="transfer_num" placeholder="Search by Transfer Number" class="sea1">
        <button type="submit" class="btn-grad">Search</button>
    </form>   
    @foreach ($transfers as $transf)
        <table>
            <thead>
                <tr>
                    <th>ID </th>
                    <th>The Receiver</th>
                    <th>Recipient Office</th>
                    <th>Send Office</th>
                    <th>The Sender</th>
                    <th>Value</th>
                    <th>Date</th>
                    <th>Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $transf->id }}</td>
                    <td>{{ $transf->Receiver }}</td>
                    <td>{{ $transf->RecipientOffice }}</td>
                    <td>{{ $transf->SendOffice }}</td>
                    <td>{{ $transf->Sender }}</td>
                    <td>{{ $transf->Value }}</td>
                    <td>{{ $transf->Date }}</td>
                    <td>{{ $transf->Number }}</td>
                    <td>
                        <a href="{{ route('transfers.edit',$transf->id) }}"><button class="editebtn">EDITE</button></a>
                        <form action="{{route('transfers.destroy',$transf->id)}} " method="post">
                        @method('Delete')
                        @csrf
                        <button class="deletebtn">DELETE</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
     @endforeach
</body>
</html>
  
   
    