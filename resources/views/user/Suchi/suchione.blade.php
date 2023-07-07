@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card row justify-content-center pt-3 mt-2">
        <div class="col-md-12">
                <div class="card-header text-center">১ নং সূচি পত্র </div>

                <div class="card-body">

                        <table id="datatablesSimple" class="table row-border" style="width:100%">
                            <thead>
                              <tr>
                                <th>আইডি</th>
                                <th>ব্যাক্তির নাম</th>
                                <th>পিতার নাম</th>
                                <th>ঠিকানা,পদ বা পদবি</th>
                                <th>যে ব্যাক্তির স্বার্থ জড়িত</th>
                                <th> যেখানে নিবন্ধিত হয়েছে</th>
                                <th>ক্রমিক নং</th>
                                <th>সাল</th>
                                <th>বালাম নং</th>
                                <th>পৃষ্ঠা নং</th>
                              </tr>
                            </thead>

                            <tbody>

                                @foreach ($suchiones as $suchione)
                                    <tr>
                                        <td><?php echo $suchione->id; ?></td>
                                        <td><?php echo $suchione->PName;  ?></td>
                                        <td><?php echo $suchione->FName;  ?></td>
                                        <td><?php echo $suchione->FAddress;  ?></td>
                                        <td><?php echo $suchione->BenPerson;  ?></td>
                                        <td><?php echo $suchione->WRegisterd;  ?></td>
                                        <td><?php echo $suchione->si_no;  ?></td>

                                        <td>
                                        @foreach ($yearList as $year)
                                            @if ($year->id == $suchione->year)
                                            {{$year->year}}
                                            @endif
                                        @endforeach
                                        </td>

                                        <td><?php echo $suchione->balam_no;  ?></td>
                                        <td><?php echo $suchione->page_no;  ?></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                </div>
        </div>
    </div>
</div>
@endsection
