@extends('layouts.app')

@section('content')
    <h4>Dashboard</h4>
    <!-- Start Row 1 -->
    <div class="row">
        <div class="col-md-3">
            <div class="card mt-0">
                <div class="row  justify-content-center">
                    <div class="col-md-6 text-center pt-5 pb-5">
                        <h3 class="mb-0" style="font-size: 70px">{{$total_events_count}}</h3>
                        <span class="text-muted" style="font-size: 20px">Total Events</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_line_good left text-center mt-3 pt-5 pb-5">
                            <img src="{{asset('images/events.png')}}" width="100">
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center pt-5 pb-5">
                        <h3 class="mb-0" style="font-size: 70px">{{$active_events_count}}</h3>
                        <span class="text-muted" style="font-size: 20px">Active Events</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_line_good left text-center mt-3 pt-5 pb-5">
                            <img src="{{asset('images/event_this_month.png')}}" width="100">
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center pt-5 pb-5">
                        <h3 class="mb-0" style="font-size: 70px">{{$this_month_events_count}}</h3>
                        <span class="text-muted" style="font-size: 20px">Events This Month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="peity_line_good left text-center mt-3 pt-5 pb-5">
                            <img src="{{asset('images/check-mark-symbol-1.jpg')}}" width="100">
                        </div>
                    </div>
                    <div class="col-md-6 border-left text-center pt-5 pb-5">
                        <h3 class="mb-0" style="font-size: 70px">{{$pending_approval_count}}</h3>
                        <span class="text-muted" style="font-size: 20px">Pending Approval</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Row 1 -->

    <!-- Start Row 2 -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pie Chart</h5>
                    <div class="pie" style="height: 450px;"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Row 2 -->

<script>
    create_pie_chart(@json($pie_chart_data));
</script>
@endsection
