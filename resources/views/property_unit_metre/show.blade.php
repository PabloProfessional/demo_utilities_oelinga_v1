

@include('include.head')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>{{$propertyUnitMetre->property_unit->name}} unit, {{$propertyUnitMetre->name}}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">{{$property->property_group->name}} - Group Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/property/{{$property->id}}">{{$property->name}}</a></li>
                <li class="breadcrumb-item"><a href="/property_unit/{{$propertyUnitMetre->property_unit->id}}">{{$propertyUnitMetre->property_unit->name}}</a></li>
                <li class="breadcrumb-item active">{{$propertyUnitMetre->name}}</li>
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
                                   <h5 class="card-title">Metre <span>| Status</span></h5>

                                   <div class="d-flex align-items-center">
                                       <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">

                                           <img src="{{$image}}" alt="water" width="100%" />

                                       </div>
                                       <div class="ps-3">
                                           <p><i class='bi bi-circle-fill activity-badge text-success align-self-start'></i> Online</p>
                                           <span class="text-danger small pt-1 fw-bold">45</span> <span class="text-muted small pt-2 ps-1">days</span>

                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div><!-- End Sales Card -->

                       @if($propertyUnitMetre->metre_type->id == 1 || $propertyUnitMetre->metre_type->id == 3 || $propertyUnitMetre->metre_type->id == 4)

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
                                           <h6>{{$electricity['electricity']}}</h6>
                                           <span class="text-danger small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increased consumption</span>

                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div><!-- End Revenue Card -->
                        @elseif($propertyUnitMetre->metre_type->id ==2)
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
                                           <h6>{{$water['water']}} litres</h6>
                                           <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decreased consumption</span>

                                       </div>
                                   </div>

                               </div>
                           </div>

                       </div><!-- End Customers Card -->

                           @else
                       @endif

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
                                <h5 class="card-title">Budget vs Consumption <span>| Annual</span></h5>

                                <!-- Column Chart -->
                                <div id="columnChart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(document.querySelector("#columnChart"), {
                                            series: [{
                                                name: 'Budget',
                                                data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
                                                color: '#808080'
                                            }, {
                                                name: 'Consumption',
                                                data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
                                                color: '{{$color}}'
                                            }],
                                            chart: {
                                                type: 'bar',
                                                height: 350
                                            },
                                            plotOptions: {
                                                bar: {
                                                    horizontal: false,
                                                    columnWidth: '55%',
                                                    endingShape: 'rounded'
                                                },
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                show: true,
                                                width: 2,
                                                colors: ['transparent']
                                            },
                                            xaxis: {
                                                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                                            },
                                            yaxis: {
                                                title: {
                                                    text: '{{--$unit--}} (thousands)'
                                                }
                                            },
                                            fill: {
                                                opacity: 1,
                                                colors: ['#808080','{{$color}}']
                                            },
                                            tooltip: {
                                                y: {
                                                    formatter: function(val) {
                                                        return "{{--$unit--}} " + val + " thousands"
                                                    }
                                                }
                                            }
                                        }).render();
                                    });
                                </script>
                                <!-- End Column Chart -->

                            </div>

                        </div>
                    </div><!-- End Reports -->

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
                                <h5 class="card-title">Billing <span>| Year to date</span></h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                    <tr>

                                        <th scope="col">Billing period</th>
                                        <th scope="col">Units consumed</th>
                                        <th scope="col">Total cost</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($propertyUnitMetre->bill as $bill)
                                        <tr>

                                            <td scope="row"><a href="/property_unit_bill/{{$bill->id}}">{{$bill->name}}</a> </td>
                                            <td>{{$bill->item->sum('units_consumed')}}</td>
                                            <td class="money">R {{number_format($bill->item->sum('amount'),2)}}</td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->

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
                                <h5 class="card-title">Metre readings <span>| Year to date</span></h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                    <tr>

                                        <th scope="col">Date</th>
                                        <th scope="col">Units</th>
                                        <th scope="col">Cumulative cost</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($readings as $reading)
                                    <tr>

                                        <td scope="row">{{date_format($reading->created_at,'d M Y')}}</td>
                                        <td><a href="#" class="text-primary">
                                                @if($reading->metre->metre_type_id == 1)
                                                    {{number_format($reading->reading/1000,1)}} kWh
                                                @elseif($reading->metre->metre_type_id == 2)
                                                    {{number_format($reading->reading)}} Litres
                                                @elseif($reading->metre->metre_type_id == 3)
                                                    {{number_format($reading->reading/1000,1)}} kWh
                                                @elseif($reading->metre->metre_type_id == 4)
                                                    {{number_format($reading->reading/1000,1)}} kWh
                                                @else
                                                @endif
                                            </a></td>
                                        <td class="money">@if($reading->metre->metre_type_id == 1)
                                                R {{number_format($reading->reading*1.209,2)}}
                                            @elseif($reading->metre->metre_type_id == 2)
                                                R {{number_format($reading->reading*0.04,2)}}
                                                              @elseif($reading->metre->metre_type_id == 3)
                                                R {{number_format($reading->reading*1.209,2)}}
                                            @elseif($reading->metre->metre_type_id == 4)
                                                R {{number_format($reading->reading*1.209,2)}}
                                            @else
                                            @endif</td>

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
                                                value: 1048,
                                                name: 'Joburg Mall'
                                            },
                                                {
                                                    value: 735,
                                                    name: 'Warehouse'
                                                },
                                                {
                                                    value: 580,
                                                    name: 'Clinic'
                                                },
                                                {
                                                    value: 484,
                                                    name: 'ranburg Office Park'
                                                },
                                                {
                                                    value: 300,
                                                    name: 'Residential Complex'
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