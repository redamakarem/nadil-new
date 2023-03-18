<div class="portlet portlet-primary">
    <div class="portlet-header">
        <div class="portlet-icon">
            <i class="fa fa-chalkboard"></i>
        </div>
        <h3 class="portlet-title">Important Stats</h3>

    </div>
    <div class="portlet-body">
        <!-- BEGIN Grid -->
        <div class="d-grid gap-2">
            <!-- BEGIN Portlet -->
            <div class="portlet mb-0">
                <div class="portlet-body">
                    <!-- BEGIN Widget -->
                    <div class="widget5">
                        <h4 class="widget5-title">Top times</h4>
                        <div class="widget5-group">
                            <div class="widget5-item">
                                @foreach ($top_time as $item)
                                    <span class="widget5-value">{{ $item->booking_time }}</span>
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <!-- END Widget -->
                </div>
            </div>
            <!-- END Portlet -->
            <!-- BEGIN Portlet -->
            <div class="portlet mb-0">
                <div class="portlet-body">
                    <!-- BEGIN Widget -->
                    <div class="widget5">
                        <h4 class="widget5-title">Top booked</h4>
                        <div class="widget5-group">
                            <div class="widget5-item">
                                @foreach ($top_booked as $item)
                                    <span class="widget5-value">{{ $item->name_en }}</span>
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <!-- END Widget -->
                </div>
            </div>
            <!-- END Portlet -->
            <!-- BEGIN Portlet -->
            <div class="portlet mb-0">
                <div class="portlet-body">
                    <!-- BEGIN Widget -->
                    <div class="widget5">
                        <h4 class="widget5-title">Top Weekdays</h4>
                        <div class="widget5-group">
                            <div class="widget5-item">
                                @foreach ($top_weekdays as $item)
                                    <span class="widget5-value">{{ $item }}</span>
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <!-- END Widget -->
                </div>
            </div>
            <!-- END Portlet -->
            
        </div>
        <!-- END Grid -->
    </div>
    <div class="portlet-footer text-end">
        <button class="btn btn-label-light">View all reports</button>
    </div>
</div>
