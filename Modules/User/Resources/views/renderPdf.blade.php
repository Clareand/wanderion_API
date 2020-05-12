<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.pdf{
    margin: 10%;
}
table{
    width: 100%;
}
table, th, td {
  border: 2px solid #9e9e9e;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}

.header{
    text-align: center;
}

.footer{
    text-align: center;
    color : #9e9e9e;
}
.md-blue{
    color: #000053;
    font-size: 14pt;
}

.md-red{
    color: red;
    font-size: 16pt;
    font-weight: bold;
}

.big-blue{
    color: #000053;
    font-size: 20pt;
    font-weight: bold
}
</style>
<body>
    <div class="pdf">
        <div class="header">
            <p class="big-blue">Detail Order</p>
            <p>Dear, {{$name}} your code <span class="md-blue">{{$order_code}}</span></p>
        </div>
        {{-- <br>
        <br> --}}
        <table>
            <tr>
                <th>Name</th>
                <td> {{$name}} </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$email}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$phone}}</td>
            </tr>
            <tr>
                <th>Shipping To </th>
                <td>{{$address}},{{$city['city_name']}},{{$postal_code}}</td>
            </tr>
            <tr>
                <th colspan="2">Design Information</th>
            </tr>
            <tr>
                <th>Starmaps Design </th>
                <td>
                    @if ($orders[0]['design']==1)
                        Black Maps with Black frame
                    @elseif ($orders[0]['design']==2)
                        Black Maps with White Frame
                    @else 
                        White Maps with White Frame
                    @endif
                </td>
            </tr>
            <tr>
                <th>Date And Time</th>
                <td>{{$dates}}</td>
            </tr>
            <tr>
                <th>Time Format</th>
                <td>
                    @if ($orders[0]['time_format']==0)
                        24 Hours Time Format
                    @else 
                        12 Hours Time Format
                    @endif
                </td>
            </tr>
            <tr>
                <th>Moon Design</th>
                <td>
                    @if ($orders[0]['moon']==0)
                        No
                    @else 
                        Yes
                    @endif
                </td>
            </tr>
            <tr>
                <th>Galaxy Design</th>
                <td>
                    @if ($orders[0]['galaxy']==0)
                        No
                    @else 
                        Yes
                    @endif
                </td>
            </tr>
            <tr>
                <th>Galaxy Design</th>
                <td>
                    @if ($orders[0]['galaxy']==0)
                        No
                    @else 
                        Yes
                    @endif
                </td>
            </tr>
            <tr>
                <th>Text 1</th>
                <td> {{$orders[0]['text_line_1']}} </td>
            </tr>
            <tr>
                <th>Text 2</th>
                <td> {{$orders[0]['text_line_2']}} </td>
            </tr>
            <tr>
                <th>Text 3</th>
                <td> {{$orders[0]['text_line_3']}} </td>
            </tr>
            <tr>
                <th>Price</th>
                <td class="md-red" style="text-align:right"> {{$orders[0]['price']}} </td>
            </tr>
        </table>
        <br><br><br><br><br>
        <div class="footer">
            <p>Wanderion Starmaps ©2020</p>
        </div>
    </div>
</body>
</html>