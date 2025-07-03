<div class="p-6  text-black rounded-lg">

    <!-- <div class="flex items-center justify-start gap-65 mb-6"> -->
    <!--     <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-20 h-16 object-contain"> -->
    <!--     <h2 class="text-2xl font-extrabold text-black ">Consultas Registradas</h2> -->
    <!-- </div> -->

    <!-- tabla de consultas -->
    <div class="overflow-x-auto">
        <table class="table-auto min-w-full mb-8 text-white border border-white rounded-lg overflow-hidden shadow-lg">
            <thead>
                <tr class="bg-green-900 text-white uppercase text-sm">
                    <th class="px-4 py-3 border border-white">Nombre</th>
                    <th class="px-4 py-3 border border-white">Email</th>
                    <th class="px-4 py-3 border border-white">Teléfono</th>
                    <th class="px-4 py-3 border border-white">Especialidad</th>
                    <th class="px-4 py-3 border border-white">Mensaje</th>
                    <th class="px-4 py-3 border border-white">Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consultas as $consulta)
                    <tr class="bg-green-500 border-t border-white hover:bg-[#2f5b4f] transition duration-200">
                        <td class="px-4 py-2 border border-white">{{ $consulta->nombre }}</td>
                        <td class="px-4 py-2 border border-white">{{ $consulta->email }}</td>
                        <td class="px-4 py-2 border border-white">{{ $consulta->telefono }}</td>
                        <td class="px-4 py-2 border border-white text-green-400 font-semibold">{{ $consulta->especialidad }}</td>
                        <td class="px-4 py-2 border border-white">{{ $consulta->mensaje }}</td>
                        <td class="px-4 py-2 border border-white">{{ $consulta->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <!-- Gráfico de especialidades -->
    <div class="mt-8 p-6 rounded-lg bg-[#25443b] ">
        <h2 class="text-xl font-semibold mb-4 text-center">Especialidades más elegidas</h2>
        <canvas id="especialidadesChart" height="100"></canvas>
    </div>
    <!-- cuadro de busqueda -->
   <div class="border-t border-white pt-6 mt-8">
    <div class="bg-white border  rounded-lg shadow-md p-6 max-w-3xl mx-auto">
        <h3 class="text-lg font-semibold mb-4 text-center text-[#25443b]">Buscar por nombre:</h3>
        <div class="flex flex-col md:flex-row gap-3 justify-center items-center">
            <input type="text" wire:model.defer="search" placeholder="Escribe un nombre"
                   class="border border-[#25443b] bg-white text-[#25443b] px-4 py-2 rounded w-full md:w-2/3 focus:outline-none focus:ring-2 focus:ring-[#25443b]">
            <button wire:click="buscar"
                    class="flex items-center gap-2 bg-green-500 hover:bg-green-500 text-white px-5 py-2 rounded font-bold transition duration-300 shadow">
                Consultar
            </button>
        </div>
    </div>
</div>

</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const data = @json($especialidades);
        const labels = data.map(item => item.especialidad);
        const values = data.map(item => item.total);

        const ctx = document.getElementById('especialidadesChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Consultas por especialidad',
                    data: values,
                    backgroundColor: '#25D366', // verde tipo WhatsApp
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    title: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1,
                            color: 'white'
                        },
                        grid: { color: 'rgba(255,255,255,0.1)' }
                    },
                    x: {
                        ticks: { color: 'white' },
                        grid: { color: 'rgba(255,255,255,0.1)' }
                    }
                }
            }
        });
    });
</script>
