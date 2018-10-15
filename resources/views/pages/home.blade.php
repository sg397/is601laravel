@extends('layouts.default')
@section('content')
 <section class="jumbotron">
        <div class="container nametxt text-center">
            <h2><b>ABCD Institutions</b></h2><br>
            <h3><b>Destination For World Class Education</b></h3>

        </div>
    </section>

    <section class="container">

            <!-- Paragraph 1 -->
            <div class="col-md-4 mb-4">
                <div class="pblock">
                    <h2>Welcome to ABCD!!</h2>
                    <p> ABCD is a center of excellence in education and research driven by outstanding faculty, facilities and talented students.</p>
                    <p class="knowmore"><a href="#">Know More</a></p>
                </div>
            </div>

            <!-- Paragraph 2 -->
            <div class="col-md-4 mb-4">
                <div class="pblock">
                    <h2>Programs!!</h2>
                    <p> ABCD offers courses range from certificates through post graduate studies in different areas like Healthcare, Engineering and Management.</p>
                    <p class="knowmore"><a href="#">Know More</a></p>
                </div>
            </div>

            <!-- Paragraph 3 -->
            <div class="col-md-4 mb-4">
                <div class="pblock">
                    <h2>Placements And Training!!</h2>
                    <p> ABCD promotes exclusive career trainings through guidance from corporate trainers and by the just placed senior students of the college. </p>
                    <p class="knowmore"><a href="#">Know More</a></p>
                </div>
            </div>

    </section>

    <!-- Link -->
    <section class="container">
        <div class="plink">
            <p>Please <a href="https://google.com" target="new">click here </a> to goto departments list.</p>
        </div>
    </section>

    <!--- TABLE -->
    <section class="container">
        <p><h2 class="theader">Department Wise Student Report</h2></p>
        <table class="table table-striped table-bordered table-hover">
            <thead class="tableheader">
            <tr class="thstyle">
                <th scope="col" class="text-center">#</th>
                <th scope="col">Department Name</th>
                <th scope="col" class="text-center">Number Of Students</th>
                <th scope="col">Director</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Contact Email</th>
            </tr>
            </thead>
            <tbody>
            <tr>

                <th scope="row" class="text-center">1</th>
                <td>Healthcare</td>
                <td class="text-center"> 250 </td>
                <td>Ryan, Smith</td>
                <td>111-111-1111</td>
                <td> <a href="#">healthcare@abcd.edu </a></td>
            </tr>

            <tr>
                <th scope="row" class="text-center">2</th>
                <td>Engneering</td>
                <td class="text-center"> 650 </td>
                <td>Castillo, Jason</td>
                <td>222-222-2222</td>
                <td> <a href="#">engineering@abcd.edu </a></td>
            </tr>

            <tr>

                <th scope="row" class="text-center">3</th>
                <td>Management</td>
                <td class="text-center"> 350 </td>
                <td>William, John</td>
                <td>111-111-1111</td>
                <td> <a href="#">management@abcd.edu </a></td>
            </tr>

            <tr>

                <th scope="row" class="text-center">4</th>
                <td>Pharmacy</td>
                <td class="text-center"> 120 </td>
                <td>Edward, Jim</td>
                <td>444-444-4444</td>
                <td> <a href="#">pharmacy@abcd.edu </a></td>
            </tr>

            <tr>

                <th scope="row" class="text-center">5</th>
                <td>Teaching</td>
                <td class="text-center"> 250 </td>
                <td>Ward, Lisa</td>
                <td>555-555-5555</td>
                <td> <a href="#">teaching@abcd.edu </a></td>
            </tr>
            </tbody>
        </table>

    </section>


@stop