<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smart Catch</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for Smart Catch">
    <meta name="author" content="Safa Hassan">
    <link rel="stylesheet" href="{{URL::asset('css/style_dashboard.css')}}">
</head>
<body>
    @include('partials.header')
    <div class="dashboard-container">
        <div class="left-box">

            <div class="image-textcontainer">
            <img src="{{URL::asset('img/Schermafbeelding_2023-12-06_om_10.23.31-removebg-preview.png')}}" alt="">
            <p>SmartCatch</p>
            </div>

            <div class="overview-button">
                <img src="{{URL::asset('img/Schermafbeelding 2023-11-27 om 13.47.56.png')}}" alt="">
                <p>Overview </p>
            </div>

            <div class="searchbar">
                <img src="{{URL::asset('img/Schermafbeelding 2023-11-27 om 13.57.18.png')}}" alt="">
                <input type="text" id="search-input" onkeyup="search()" placeholder="Search Boat">
            </div>
            <div class="search-result">
                <ul id="search-items">
                    @foreach($ships as $ship)
                        <li class="ships"><a href="/ship/{{$ship['id']}}">{{$ship['name']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>


        <div class="center-boxes">
            <div class="center-box1">
                <p>Welcome back,</p>
                <h1>{{$user->name}}</h1>
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
                <div class="header-container">
                <div class="square"></div>
                    <p>Top schepen</p>
                </div>
                @foreach($topships as $topship)
                    <div class="ship-container">
                        <img src="{{URL::asset('img/36F8ED41AACDA2BD424F96B8390E6FBC-vissersboot.jpg')}}" alt="" width="60" height="50">
                        <a id="ship-link" href="/ship/{{$topship['id']}}">{{$topship['name']}}</a>
                    </div>
                @endforeach
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
    <script src="{{URL::asset('js/script.js')}}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script>
        // PHP data to be passed to JavaScript
        const shipsData = @json($hauls);

        // Get the canvas element
        const lineChart = document.getElementById('lineChart').getContext('2d');

        // Create the chart
        const shipHaulsChart = new Chart(lineChart, {
            type: 'line',
            data: {
                labels: Object.keys(shipsData[Object.keys(shipsData)[0]]), // Assuming all ships have the same dates
                datasets: Object.keys(shipsData).map(ship => ({
                    label: ship,
                    data: Object.values(shipsData[ship]),
                    borderColor: `rgb(${Math.random() * 255},${Math.random() * 255},${Math.random() * 255})`,
                    fill: false,
                })),
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: true,
                    position: 'left',
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Date',
                        },
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Haul Weight',
                        },
                    },
                },
            },
        });

        const fishCaughtData = @json($fishCaught, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        // Round the data to two decimals
        Object.keys(fishCaughtData).forEach(key => {
            fishCaughtData[key] = parseFloat(fishCaughtData[key]).toFixed(2);
        });

        // Get the canvas element
        const ctx = document.getElementById('barChart').getContext('2d');

        // Create the chart
        const fishCaughtChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: Object.keys(fishCaughtData),
                datasets: [{
                    data: Object.values(fishCaughtData),
                    backgroundColor: Array.from({ length: Object.keys(fishCaughtData).length }, () =>
                        `rgba(${Math.random() * 255},${Math.random() * 255},${Math.random() * 255},0.5)`
                    ),
                    borderColor: Array.from({ length: Object.keys(fishCaughtData).length }, () =>
                        `rgba(${Math.random() * 255},${Math.random() * 255},${Math.random() * 255},1)`
                    ),
                    borderWidth: 1,
                }],
            },
            options: {
                legend: {
                    display: false,
                },
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Fish Type',
                        },
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Weight',
                        },
                    },
                    yAxes: [{ticks: {min: 0}}],
                },
            },
        });

        // Get the canvas element
        const pieChart = document.getElementById('pieChart').getContext('2d');

        const totalWeight = Object.values(fishCaughtData).reduce((sum, weight) => sum + parseFloat(weight), 0);


        const percentages = Object.keys(fishCaughtData).reduce((percentages, key) => {
            percentages[key] = ((parseFloat(fishCaughtData[key]) / totalWeight) * 100).toFixed(2) + '%';
            return percentages;
        }, {});

        // Create the chart
        const fishCaughtPieChart = new Chart(pieChart, {
            type: 'pie',
            data: {
                labels: Object.keys(fishCaughtData),
                datasets: [{
                    data: Object.values(fishCaughtData),
                    backgroundColor: Array.from({ length: Object.keys(fishCaughtData).length }, () =>
                        `rgba(${Math.random() * 255},${Math.random() * 255},${Math.random() * 255},0.5)`
                    ),
                    borderColor: Array.from({ length: Object.keys(fishCaughtData).length }, () =>
                        `rgba(${Math.random() * 255},${Math.random() * 255},${Math.random() * 255},1)`
                    ),
                    borderWidth: 1,
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            },
        });
    </script>
</body>
</html>
