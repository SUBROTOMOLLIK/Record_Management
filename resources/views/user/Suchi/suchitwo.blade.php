<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>২ নং সূচি পত্র </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('backend/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid p-4 text-center">
            <div class="my-2"></div>

                <div class="card-header"> ২ নং সূচি পত্র </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>আইডি</th>
                                <th>সম্পত্তির অবস্থান</th>
                                <th>সম্পত্তির পরিমান</th>
                                <th>শহর অথবা থানা</th>
                                <th>জেলা</th>
                                <th>দলিলের ধরন</th>
                                <th>লেনদেন এর পরিমান </th>
                                <th> যেখানে নিবন্ধিত হয়েছে</th>
                                <th>জেল নাম্বার</th>
                                <th>ক্রমিক নং</th>
                                <th>সাল</th>
                                <th>বালাম নং</th>
                                <th>পৃষ্ঠা নং</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($suchitwos as $suchitwo)
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $suchitwo->LProperty;  ?></td>
                                <td><?php echo $suchitwo->AProperty;  ?></td>
                                <td><?php echo $suchitwo->CityThana;  ?></td>
                                <td><?php echo $suchitwo->District;  ?></td>
                                <td><?php echo $suchitwo->type_of_deed;  ?></td>
                                <td><?php echo $suchitwo->amount_of_money;  ?></td>
                                <td><?php echo $suchitwo->WRegisterd;  ?></td>
                                <td><?php echo $suchitwo->jailNo;  ?></td>
                                <td><?php echo $suchitwo->si_no;  ?></td>
                                <td><?php echo $suchitwo->year;  ?></td>
                                <td><?php echo $suchitwo->balam_no;  ?></td>
                                <td><?php echo $suchitwo->page_no;  ?></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
        @include('admin.layouts.parts.script')
    </body>
</html>
