

@include('include.head')

<main id="main" class="main">
    {{--}}
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
    </div>
    --}}
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$bill->name}}</h5>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Item</th>
                            <th scope="col">Units consumed</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bill->item as $item)
                            <tr>
                                <th scope="row">{{date_format($item->created_at,'d M Y')}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{number_format($item->units_consumed)}}</td>
                                <td>R {{number_format($item->amount,2)}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->

@include('include.footer')