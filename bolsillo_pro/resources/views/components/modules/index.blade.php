<div class="pb-5">
  <h3 class="mb-3">Bienvenido, <strong>{{ auth()->user()->name }}</strong> 👋</h3>
  <p class="text-body-secondary mb-4">Te damos la bienvenida a tu panel de control. Aquí tienes un resumen rápido:</p>

  <div class="row g-4">
    @foreach([
      ['Usuarios registrados', 128, 'primary', 'fas fa-users'],
      ['Actividad hoy', '57%', 'success', 'fas fa-chart-line'],
      ['Uso del servidor', '72%', 'warning', 'fas fa-server'],
      ['Alertas críticas', 3, 'danger', 'fas fa-bell'],
    ] as [$title, $value, $color, $icon])
      <div class="col-md-6 col-xxl-3">
        <div class="card shadow-sm h-100 border-0 bg-{{ $color }}-subtle text-{{ $color }} dark__bg-gray-1100">
          <div class="card-body d-flex align-items-center">
            <div class="icon-item icon-item-sm rounded-3 shadow-sm bg-{{ $color }} text-white me-3">
              <i class="{{ $icon }}"></i>
            </div>
            <div>
              <h6 class="mb-1">{{ $title }}</h6>
              <h4 class="fw-bold mb-0">{{ $value }}</h4>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

<div class="row gx-6">
  <div class="col-12 col-xl-6 mt-4">
    <div class="card shadow-sm dark__bg-gray-1100">
      <div class="card-header bg-light dark__bg-gray-1000">
        <h5 class="mb-0">Actividad de los últimos días</h5>
      </div>
      <div class="card-body">
        <canvas id="activityChart" height="180"></canvas>
      </div>
    </div>
  </div>

  <div class="col-12 col-xl-6 mt-4">
    <div class="card shadow-sm dark__bg-gray-1100">
      <div class="card-header bg-light dark__bg-gray-1000">
        <h5 class="mb-0">Últimas acciones</h5>
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-transparent">✔️ Se agregó un nuevo usuario.</li>
          <li class="list-group-item bg-transparent">📄 Se generó un reporte de actividad.</li>
          <li class="list-group-item bg-transparent">⚙️ Se actualizó el módulo de pagos.</li>
          <li class="list-group-item bg-transparent">🔒 Se cerró una sesión inactiva.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('activityChart');
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
      datasets: [{
        label: 'Actividad',
        data: [12, 19, 14, 20, 17, 11, 15],
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.2
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
@endpush
