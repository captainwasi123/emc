@extends('includes.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid p-0 ">
        <div class="row ">
            <div class="col-lg-12">
                <div class="single_element">
                    <div class="quick_activity">
                        <div class="row">
                            <div class="col-12">
                                <div class="quick_activity_wrap">
                                    <!-- single_quick_activity  -->
                                    <div class="single_quick_activity">
                                        <div class="count_content">
                                            <p>Revenue</p>
                                            <h3>$<span class="counter">35000</span> </h3>
                                        </div>
                                        <a href="#" class="notification_btn">Today</a>
                                        <div id="bar1" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="95"></span>
                                        </div>
                                    </div>
                                    <!-- single_quick_activity  -->
                                    <div class="single_quick_activity">
                                        <div class="count_content">
                                            <p>Orders</p>
                                            <h3><span class="counter">35000</span> </h3>
                                        </div>
                                        <a href="#" class="notification_btn yellow_btn">This Week</a>
                                        <div id="bar2" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="65"></span>
                                        </div>
                                    </div>
                                    <!-- single_quick_activity  -->
                                    <div class="single_quick_activity">
                                        <div class="count_content">
                                            <p>Leads</p>
                                            <h3>$<span class="counter">50000</span> </h3>
                                        </div>
                                        <a href="#" class="notification_btn green_btn">This Month</a>
                                        <div id="bar3" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="75"></span>
                                        </div>
                                    </div>
                                    <!-- single_quick_activity  -->
                                    <div class="single_quick_activity">
                                        <div class="count_content">
                                            <p>Lead Conversion Rate</p>
                                            <h3><span class="counter">50</span> %</h3>
                                        </div>
                                        <a href="#" class="notification_btn violate_btn">Anual</a>
                                        <div id="bar4" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="85"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection