

@include('include.head')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>{{$property->name}}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/dashboard">{{$propertyGroup->name}} - Group Dashboard</a></li>
                <li class="breadcrumb-item active">{{$property->name}}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                   <div class="row">
                       <!-- Sales Card -->
                       <div class="col-xxl-4 col-md-6 oe_card">
                           <div class="card info-card sales-card ">

                               <div class="filter">
                                   <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                       <li class="dropdown-header text-start">
                                           <h6>Filter</h6>
                                       </li>

                                       <li><a class="dropdown-item" href="#">Today</a></li>
                                       <li><a class="dropdown-item" href="#">This Month</a></li>
                                       <li><a class="dropdown-item" href="#">This Year</a></li>
                                   </ul>
                               </div>

                               <div class="card-body">
                                   <h5 class="card-title">EPC <span>| Rating</span></h5>

                                   <div class="d-flex align-items-center">
                                       <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                           B
                                       </div>
                                       <div class="ps-3">
                                           <h6>1.3 kWh/m<sup>2</sup></h6>
                                           <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increased emissions</span>

                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div><!-- End Sales Card -->
                       <!-- Sales Card -->
                       <div class="col-xxl-4 col-md-6 oe_card">
                           <div class="card info-card sales-card">

                               <div class="filter">
                                   <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                       <li class="dropdown-header text-start">
                                           <h6>Filter</h6>
                                       </li>

                                       <li><a class="dropdown-item" href="#">Today</a></li>
                                       <li><a class="dropdown-item" href="#">This Month</a></li>
                                       <li><a class="dropdown-item" href="#">This Year</a></li>
                                   </ul>
                               </div>

                               <div class="card-body">
                                   <h5 class="card-title">CO<sub>2</sub> <span>| Emissions</span></h5>

                                   <div class="d-flex align-items-center">
                                       <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                           t
                                       </div>
                                       <div class="ps-3">
                                           <h6>2 mill tonnes</h6>
                                           <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increased emissions</span>

                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div><!-- End Sales Card -->
                   </div>

                   <div class="row">
                       <!-- Revenue Card -->
                       <div class="col-xxl-4 col-md-6 oe_card">
                           <div class="card info-card revenue-card ">

                               <div class="filter">
                                   <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                       <li class="dropdown-header text-start">
                                           <h6>Filter</h6>
                                       </li>

                                       <li><a class="dropdown-item" href="#">Today</a></li>
                                       <li><a class="dropdown-item" href="#">This Month</a></li>
                                       <li><a class="dropdown-item" href="#">This Year</a></li>
                                   </ul>
                               </div>

                               <div class="card-body">
                                   <h5 class="card-title">Energy <span>| Consumption</span></h5>

                                   <div class="d-flex align-items-center">
                                       <div class="card-icon rounded-circle d-flex align-items-center justify-content-center badge-electricity">
                                           <i class="bi bi-lightning-charge"></i>
                                       </div>
                                       <div class="ps-4">
                                           <h6>{{$electricity}}</h6>
                                           <span class="text-danger small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increased consumption</span>

                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div><!-- End Revenue Card -->

                       <!-- Customers Card -->
                       <div class="col-xxl-4 col-xl-12 oe_card" >

                           <div class="card info-card customers-card">

                               <div class="filter">
                                   <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                       <li class="dropdown-header text-start">
                                           <h6>Filter</h6>
                                       </li>

                                       <li><a class="dropdown-item" href="#">Today</a></li>
                                       <li><a class="dropdown-item" href="#">This Month</a></li>
                                       <li><a class="dropdown-item" href="#">This Year</a></li>
                                   </ul>
                               </div>

                               <div class="card-body">
                                   <h5 class="card-title">Water <span>| Consumption</span></h5>

                                   <div class="d-flex align-items-center">
                                       <div class="card-icon rounded-circle d-flex align-items-center justify-content-center badge-water">
                                           <i class="bi bi-water"></i>
                                       </div>
                                       <div class="ps-3">
                                           <h6>{{$water}} litres</h6>
                                           <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decreased consumption</span>

                                       </div>
                                   </div>

                               </div>
                           </div>

                       </div><!-- End Customers Card -->
                   </div>

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Consumption Trends <span>| Annual</span></h5>

                                <!-- Line Chart -->
                                <div id="reportsChart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                            series: [{
                                                name: 'CO2',
                                                data: [31, 40, 28, 51, 42, 82, 56],
                                            }, {
                                                name: 'Electricity',
                                                data: [11, 32, 45, 32, 34, 52, 41]
                                            }, {
                                                name: 'Water',
                                                data: [15, 11, 32, 18, 9, 24, 11]
                                            }],
                                            chart: {
                                                height: 350,
                                                type: 'area',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            markers: {
                                                size: 4
                                            },
                                            colors: ['#808080', '#c45d25', '#343c54'],
                                            fill: {
                                                type: "gradient",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                }
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                curve: 'smooth',
                                                width: 1
                                            },
                                            xaxis: {
                                                type: 'datetime',
                                                categories: ["2022-01-01T00:00:00.000Z", "2022-02-01T00:00:00.000Z","2022-03-01T00:00:00.000Z","2022-04-01T00:00:00.000Z","2022-05-01T00:00:00.000Z","2022-06-01T00:00:00.000Z"]
                                            },
                                            tooltip: {
                                                x: {
                                                    format: 'dd/MM/yy'
                                                },
                                            }
                                        }).render();
                                    });
                                </script>
                                <!-- End Line Chart -->

                            </div>

                        </div>
                    </div><!-- End Reports -->

                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">Incoming property metres <span>| Year to date</span></h5>

                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col">Metre</th>
                                        <th scope="col">Units consumed</th>
                                        <th scope="col">Demand capacity</th>
                                        <th scope="col">Installed Capacity</th>
                                        <th scope="col">Utilisation</th>
                                        <th scope="col" class="money">Cost</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($property->metre as $metre)
                                        <tr>
                                            <th scope="row"><a href="/metre/{{$metre->id}}"><img src="assets/img/metres/water_sample.jpg" alt="">{{$metre->name}}</a></th>
                                            <td class="fw-bold">
                                                @if($metre->metre_type->id == 1)
                                                    {{number_format($metre->electricity->sum('reading')/1000,1)}} kWh
                                                @elseif($metre->metre_type->id == 2)
                                                    {{number_format($metre->water->sum('reading')/1000000,2)}} mill Litres
                                                                    @elseif($metre->metre_type->id == 3)
                                                    {{number_format($metre->solar->sum('reading')/1000,1)}} kWh
                                                @elseif($metre->metre_type->id == 4)
                                                    {{number_format($metre->generator->sum('reading')/1000,1)}} kWh

                                                @else
                                                @endif
                                            </td>
                                            <td>

                                                @if($metre->metre_type->id == 1)
                                                    {{number_format(($metre->electricity->sum('reading')/\Illuminate\Support\Carbon::parse('2022-01-01')->diffInHours($metre->electricity->last()->created_at)),2)}} kW
                                                @elseif($metre->metre_type->id == 2)
                                                    65 mill litres
                                                @elseif($metre->metre_type->id == 3)

                                                @elseif($metre->metre_type->id == 4)
                                                    {{number_format(($metre->generator->sum('reading')/\Illuminate\Support\Carbon::parse('2022-01-01')->diffInHours($metre->generator->last()->created_at)),2)}} kW


                                                @else
                                                @endif

                                            </td>

                                            <td>
                                                @if($metre->metre_type->id == 1)
                                                    {{number_format($metre->installed_capacity*0.8,0)}} kW <br>
                                                    or {{number_format($metre->installed_capacity,0)}} kVA
                                                @elseif($metre->metre_type->id == 2)
                                                    {{number_format($metre->installed_capacity/1000000,2)}} mill litres
                                                @elseif($metre->metre_type->id == 3)

                                                @elseif($metre->metre_type->id == 4)
                                                    {{number_format($metre->installed_capacity*0.8,0)}} kW <br>
                                                    or {{number_format($metre->installed_capacity,0)}} kVA


                                                @else
                                                @endif
                                            </td>
                                            <td>
                                                @if($metre->metre_type->id == 1)
                                                {{number_format(($metre->electricity->sum('reading')/\Illuminate\Support\Carbon::parse('2022-01-01')->diffInHours($metre->electricity->last()->created_at))/($metre->installed_capacity*0.8)*100,2)}} %
                                                @elseif($metre->metre_type->id == 2)
                                                    

                                                @elseif($metre->metre_type->id == 3)

                                                @elseif($metre->metre_type->id == 4)
                                                    {{number_format(($metre->generator->sum('reading')/\Illuminate\Support\Carbon::parse('2022-01-01')->diffInHours($metre->generator->last()->created_at))/($metre->installed_capacity*0.8)*100,2)}} %


                                                @else
                                                @endif


                                            </td>
                                            <td class="money">
                                                @if($metre->metre_type->id == 1)
                                                    R {{number_format($metre->electricity->sum('reading')*1.209,2)}}
                                                    @elseif($metre->metre_type->id == 2)
                                                    R {{number_format($metre->water->sum('reading')*0.04,2)}}
                                                    @elseif($metre->metre_type->id == 3)
                                                    R {{number_format($metre->solar->sum('reading')*1.209,2)}}
                                                @elseif($metre->metre_type->id == 4)
                                                    R {{number_format($metre->generator->sum('reading')*1.209,2)}}
                                                    @else
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Property units <span>| Year to date</span></h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                    <tr>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Tenant</th>
                                        <th scope="col">Energy</th>
                                        <th scope="col">Water</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                 @foreach($property->unit as $unit)
                                        <tr>
                                            <th scope="row"><a href="/property_unit/{{$unit->id}}">{{$unit->name}}</a></th>
                                            <td>
                                                @if(isset($unit->tenant->user))
                                                <a href="/user/{{$unit->tenant->user->id}}">{{$unit->tenant->user->name}}</a>
                                                    @else
                                                @endif

                                            </td>
                                            <td></td>
                                            <td class="money"></td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Activity -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                        <div class="activity">

                            <div class="activity-item d-flex">
                                <div class="activite-label">32 min</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content">
                                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">56 min</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content">
                                    Voluptatem blanditiis blanditiis eveniet
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 hrs</div>
                                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                <div class="activity-content">
                                    Voluptates corrupti molestias voluptatem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">1 day</div>
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                <div class="activity-content">
                                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 days</div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content">
                                    Est sit eum reiciendis exercitationem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">4 weeks</div>
                                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                <div class="activity-content">
                                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                </div>
                            </div><!-- End activity item-->

                        </div>

                    </div>
                </div><!-- End Recent Activity -->

                <!-- Budget Report -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                        <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                                    legend: {
                                        data: ['Allocated Budget', 'Actual Spending']
                                    },
                                    radar: {
                                        // shape: 'circle',
                                        indicator: [{
                                            name: 'Joburg Mall',
                                            max: 6500
                                        },
                                            {
                                                name: 'Warehouse',
                                                max: 16000
                                            },
                                            {
                                                name: 'Ranburg Office Park',
                                                max: 30000
                                            },
                                            {
                                                name: 'Warehouse',
                                                max: 38000
                                            },
                                            {
                                                name: 'Clinic',
                                                max: 52000
                                            },
                                            {
                                                name: 'Residential Complex',
                                                max: 25000
                                            }
                                        ]
                                    },
                                    series: [{
                                        name: 'Budget vs spending',
                                        type: 'radar',
                                        data: [{
                                            value: [4200, 3000, 20000, 35000, 50000, 18000],
                                            name: 'Allocated Budget'
                                        },
                                            {
                                                value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                name: 'Actual Spending'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Budget Report -->

                <!-- Website Traffic -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Spend breakdown <span>| Annual</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Access From',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '18',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: [{
                                                value: 61020407,
                                                name: 'Municipal Metre No. 2832'
                                            },
                                                {
                                                    value: 12596,
                                                    name: 'Joburg Water'
                                                },
                                                {
                                                    value: 2627083,
                                                    name: 'SuperSolar Series 11'
                                                },
                                                {
                                                    value: 19774,
                                                    name: 'Caterpillar Diesel - Model:C2.2 | D3'
                                                }
                                            ]
                                        }]
                                    });
                            });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->

                <!-- News & Updates Traffic -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                        <div class="news">
                            <div class="post-item clearfix">
                                <img src="assets/img/news-1.jpg" alt="">
                                <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-2.jpg" alt="">
                                <h4><a href="#">Quidem autem et impedit</a></h4>
                                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-3.jpg" alt="">
                                <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-4.jpg" alt="">
                                <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-5.jpg" alt="">
                                <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                                <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                            </div>

                        </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->

@include('include.footer')