<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pemilihan Suara</title>
    <link href="{{ asset('css/result2.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-wrapper {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            height: 510px;
        }

        .chart-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            flex: 1;
            min-width: 400px;
            height: 480px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 14px;
        }
    </style>
</head>

<body class="bg-gradient-to-b from-brown-light to-white min-h-screen font-sans bg-cover bg-center" style="background-image: url('/css/Pakem Bongkaran.png');">

    <!-- Header Section -->
    <header class="bg-white p-4 relative">
        <!-- Tombol Kembali -->
        <div class="absolute top-24 left-4">
            <a href="javascript:history.back()" class="text-white bg-yellow-900 px-4 py-2 rounded shadow hover:bg-yellow-800 transition duration-200">
                &#8592; Kembali
            </a>
        </div>

        <div class="container mx-auto flex items-center justify-between text-white">
            <img src="gambar/LOGO MUSANG 2024 rz.png" alt="Logo" class="w-12">
            <h1 class="text-4xl font-bold text-yellow-900">HASIL PEMILIHAN 2024</h1>
            <img src="gambar/logo ti.png" alt="Logo Sponsor" class="h-12">
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="container mx-auto py-10 mb-28">

        <!-- Title Section -->
        <div class="text-center mb-8">
            <h2 class="text-xl font-bold">HASIL PEMILIHAN REAL-TIME</h2>
            <p class="text-lg mt-2">SUARA SEMENTARA: {{ $totalVotes }} SUARA</p>
        </div>

        <!-- Chart Wrapper -->
        <div class="chart-wrapper">
            <!-- Pie Chart Section -->
            <div class="chart-container">
                <h3 class="text-center font-semibold text-lg ">Diagram Hasil Pemilihan</h3>
                <canvas id="voteChart"></canvas>
            </div>

            <!-- Bar Chart Section -->
            <div class="chart-container">
                <h3 class="text-center font-semibold text-lg mb-16">Histogram Hasil Pemilihan</h3>
                <canvas id="barChart"></canvas>
            </div>
        </div>

    </main>

    <!-- Footer Section -->
    <footer class="bg-white py-4">
        <div class="container mx-auto text-center">
            <p class="font-semibold text-base text-yellow-900">©MUSANG HMTI 2024</p>
        </div>
    </footer>

    <!-- JavaScript untuk Chart -->
    <script>
        const candidates = @json($candidates);
        const totalVotes = {{ $totalVotes }};

        // Pie Chart
        const dataPie = {
            labels: candidates.map(candidate => candidate.candidate_name),
            datasets: [{
                label: 'Hasil Pemilihan',
                data: candidates.map(candidate => candidate.vote_count),
                backgroundColor: ['#F59E0B', '#EF4444', '#3B82F6', '#22C55E', '#6366F1'],
                hoverOffset: 4
            }]
        };

        const ctxPie = document.getElementById('voteChart').getContext('2d');
        new Chart(ctxPie, {
            type: 'pie',
            data: dataPie,
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'bottom' },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const value = context.raw;
                                const percentage = ((value / totalVotes) * 100).toFixed(1);
                                return `${context.label}: ${value.toLocaleString()} Suara (${percentage}%)`;
                            }
                        }
                    }
                }
            }
        });

        // Bar Chart
        const ctxBar = document.getElementById('barChart').getContext('2d');
        new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: candidates.map(candidate => candidate.candidate_name),
                datasets: [{
                    label: 'Jumlah Suara',
                    data: candidates.map(candidate => candidate.vote_count),
                    backgroundColor: ['#F59E0B', '#EF4444', '#3B82F6', '#22C55E', '#6366F1']
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    </script>
</body>

</html>
        