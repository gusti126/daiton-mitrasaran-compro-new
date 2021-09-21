<div>
    @section('title')
        Dashboard Management
    @endsection

    <div class="grid grid-flow-row grid-cols-12 gap-4">
        <div class="col-span-4">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Admin</h4>
                    </div>
                    <div class="card-body">
                        {{ $admin_count }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-4">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total User</h4>
                    </div>
                    <div class="card-body">
                        {{ $user_count }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-4">
            <div class="card card-statistic-1">
                <div class="card-icon bg-green-500">
                    <i class="fas fa-book-reader"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Artikel</h4>
                    </div>
                    <div class="card-body">
                        {{ $artikel_count }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-flow-row grid-cols-12 gap-4">
        <div class="col-span-6">
            <div style="height: 400px;">
                <livewire:livewire-line-chart :line-chart-model="$lineChart" />
            </div>
        </div>
        <div class="col-span-6">
            <div style="height: 400px;">
                <livewire:livewire-pie-chart :pie-chart-model="$pieChart" />
            </div>
        </div>
        <div class="col-span-6">
            <div style="height: 400px;">
                <livewire:livewire-column-chart :column-chart-model="$columnChartModel" />
            </div>
        </div>
    </div>




</div>
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush
