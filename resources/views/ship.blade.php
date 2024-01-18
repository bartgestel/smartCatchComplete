<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smart Catch</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for Smart Catch">
    <meta name="author" content="Safa Hassan">
    <link rel="stylesheet" href={{URL::asset('css/style_ship1.css')}}>
</head>


<body>
    @include('partials.header')
    <div class="dashboard-container">
        <div class="left-box">

            <div class="image-textcontainer">
            <img src="{{URL::asset('img/Schermafbeelding_2023-12-06_om_10.23.31-removebg-preview.png')}}" alt="">
            <p>SmartCatch</p>
            </div>

            <a href="dashboard.html" class="overview-button">
                <img src="{{URL::asset('img/Schermafbeelding 2023-11-27 om 13.47.56.png')}}" alt="">
                <p>Overview</p>
            </a>

            <div class="searchbar" onclick="handlePlaceholderClick()">
                <img src="{{URL::asset('img/Schermafbeelding 2023-11-27 om 13.57.18.png')}}" alt="">
                <div contenteditable="true" id="content-editable" oninput="handleInput(event)">
                  <p id="placeholder" style="display: block;">Search</p>
                </div>
              </div>
        </div>


        <div class="center-boxes">
            <div class="center-box1">
                <h1 id="ship-name">{{$ship->name}}</h1>
                <p>Total weight in KG: {{$ship->totalWeight}}KG</p>
            </div>


            <div class="middle-boxes">
                <div class="center-box2">
                    <div class="box-title">
                        <div class="square"></div>
                        <p>Caught Fish</p>
                    </div>
                    <section class="data-section">
                        <canvas id="barChart"></canvas>
                    </section>
                </div>
                <div class="center-box3">
                    <div class="box-title">
                        <div class="square"></div>
                        <p>Fish Percentage</p>
                    </div>
                    <section class="data-section">
                        <canvas id="pieChart"></canvas>
                    </section>
                </div>
            </div>

            <div class="center-box4">
                <div class="box-title">
                    <div class="square"></div>
                    <p>Last 10 Hauls</p>
                </div>
                <section class="data-section">
                    <canvas id="lineChart"></canvas>
                </section>
            </div>
        </div>


        <div class="right-boxes">
            <div class="right-box1">
                <div class="square"></div>
                    <p>data</p>
            </div>

            <div class="right-box2">
                <div class="square"></div>
                <p>data</p>
            </div>
        </div>
</div>
    <footer>
        <p>&copy; 2023 SmartCatch. Alle rechten voorbehouden.</p>
    </footer>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
    var xValues = [];
    @foreach($fishNames as $fishName)
        xValues.push("{{$fishName}}");
    @endforeach
    var yValues = [];
    @foreach($fishWeight as $fishWeights)
        yValues.push("{{$fishWeights}}");
        @endforeach
    var barColors = ["red", "green","blue", "orange", "brown", "purple", "pink", "yellow", "grey"];



    new Chart("barChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues,
            }]
        },
        options: {
            legend: {display: false},
            scales: {
                yAxes: [{ticks: {min: 0}}],
            },
            plugin: {
                labels: {
                    render: 'label'
                }
            }
        },
    });

    Chart.defaults.global.defaultFontColor = "#0f0f0f";

    new Chart("pieChart", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: true,
                position: 'left'
            },
            tooltips: {
                enabled: false
            },
            plugin: {
                labels: {
                    render: 'percentage',
                    precision: 2
                }
            }
        },
    });

    //Line chart
    xValues = [];
    @foreach($haulDates as $haulDate)
        xValues.push("{{$haulDate}}");
    @endforeach
    yValues = [];
    @foreach($recentHauls as $haulWeight)
        yValues.push("{{$haulWeight}}");
    @endforeach

    new Chart("lineChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            responsive: true,
            maintainAspectRatio: false,
        }
    });

</script>
</html>
