<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pemilihan Suara</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <style>
        .chart-container {
            max-width: 400px; /* Membatasi ukuran maksimal */
            margin: 0 auto; /* Agar diagram berada di tengah */
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Header Section -->
    <header class="bg-yellow-900 p-4">
        <div class="container mx-auto flex items-center justify-between text-white">
            <img src="gambar/LOGO MUSANG 2024 rz.png" alt="Logo" class="h-12">
            <h1 class="text-2xl font-semibold">Hasil Pemilihan 2024</h1>
            <img src="gambar/logo ti.png" alt="Logo Sponsor" class="h-12">
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="container mx-auto py-10">

        <!-- Title Section -->
        <div class="text-center mb-8">
            <h2 class="text-xl font-bold">HASIL PEMILIHAN REAL-TIME</h2>
            <p class="text-lg mt-2">SUARA SEMENTARA: {{ $totalVotes }} SUARA</p>
        </div>

        <!-- Pie Chart Section -->
        <div class="chart-container bg-white rounded-lg shadow-lg p-6">
            <canvas id="voteChart"></canvas>
        </div>

    </main>

    <!-- Footer Section -->
    <footer class="bg-yellow-900 py-4">
        <div class="container mx-auto text-center">
            <div class="flex flex-wrap">
                <div class="w-full">
                    <p class="font-semibold text-base text-slate-200">©MUSANG HMTI 2024</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript untuk Chart -->
    <script>
        // Data dari backend Laravel
        const candidates = @json($candidates);
        // Total suara
        const totalVotes = {{ $totalVotes}};
        // Data untuk Chart.js
        const data = {
            labels: candidates.map(candidate => candidate.candidate_name),
            datasets: [{
                label: 'Hasil Pemilihan',
                data: candidates.map(candidate => candidate.vote_count),
                backgroundColor: [
                    '#F59E0B',
                    '#EF4444',
                    '#3B82F6',
                    '#22C55E',
                    '#6366F1',
                    '#8B9467',
                    '#F472B6',
                    '#FBBF24',
                    '#34C759',
                    '#4F46E5'
                ],
                hoverOffset: 4
            }]
        };

        // Konfigurasi Chart.js
        const config = {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
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
        };

        // Render Chart
        const ctx = document.getElementById('voteChart').getContext('2d');
        new Chart(ctx, config);
    </script>
</body>

</html>