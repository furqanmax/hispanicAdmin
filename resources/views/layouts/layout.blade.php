<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HisPanic Adminn</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{url('css/summernote/summernote.css')}}">

    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{ url('css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('css/normalize.css')}}">

    <link rel="stylesheet" href="{{ url('css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{ url('css/data-table/bootstrap-editable.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('css/educate-custon-icon.css')}}">
    <link rel="stylesheet" href="{{ url('css/select2/select2.min.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{ url('css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{ url('css/calendar/fullcalendar.print.min.css')}}">
    <!-- modals CSS
		============================================ -->
        <link rel="stylesheet" href="{{url('css/modals.css')}}">
        <!-- forms CSS
            ============================================ -->
        <link rel="stylesheet" href="{{url('css/form/all-type-forms.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('style.css')}}">
    <link rel="stylesheet" href="{{url('css/chosen/bootstrap-chosen.css')}}">

    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('css/ionRangeSlider/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{url('css/ionRangeSlider/ion.rangeSlider.skinFlat.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ url('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <style>
      .sidebar-nav .metismenu a{
        font-size: 14px!important;
      }
      </style>
</head>

<body>
    @include('partials.sidebar')
    <div class="all-content-wrapper">
        @include('partials.navbar')
             @yield('content')
             
         </div>
         



  <!-- jquery
		============================================ -->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('js/select2/select2.full.min.js')}}"></script>
        <script src="{{asset('js/select2/select2-active.js')}}"></script>
        
    <script src="{{asset('js/ionRangeSlider/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('js/ionRangeSlider/ion.rangeSlider.active.js')}}"></script>
    <script src="{{asset('js/chosen/chosen.jquery.js')}}"></script>
    <script src="{{asset('js/chosen/chosen-active.js')}}"></script>   
    
    
    <!-- bootstrap JS
            ============================================ -->
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
     
        <!-- wow JS
            ============================================ -->
        <script src="{{ asset('js/wow.min.js')}}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{ asset('js/jquery-price-slider.js')}}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{ asset('js/jquery.meanmenu.js')}}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{ asset('js/jquery.sticky.js')}}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{ asset('js/jquery.scrollUp.min.js')}}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
            <script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
            <script src="{{ asset('js/scrollbar/mCustomScrollbar-active.js')}}"></script>
            
        <!-- counterup JS
            ============================================ -->
        <script src="{{ asset('js/counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('js/counterup/waypoints.min.js')}}"></script>
        <script src="{{ asset('js/counterup/counterup-active.js')}}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{ asset('js/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('js/metisMenu/metisMenu-active.js')}}"></script>
        <script src="{{asset('js/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('js/summernote/summernote-active.js')}}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{asset('js/tab.js')}}"></script>


         <!-- icheck JS
		============================================ -->
    <script src="{{asset('js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('js/icheck/icheck-active.js')}}"></script>
        <!-- morrisjs JS
            ============================================ -->

            <script src="{{ asset('js/data-table/bootstrap-table.js')}}"></script>
            <script src="{{ asset('js/data-table/tableExport.js')}}"></script>
            <script src="{{ asset('js/data-table/data-table-active.js')}}"></script>
            <script src="{{ asset('js/data-table/bootstrap-table-editable.js')}}"></script>
            <script src="{{ asset('js/data-table/bootstrap-editable.js')}}"></script>
            <script src="{{ asset('js/data-table/bootstrap-table-resizable.js')}}"></script>
            <script src="{{ asset('js/data-table/colResizable-1.5.source.js')}}"></script>
            <script src="{{ asset('js/data-table/bootstrap-table-export.js')}}"></script>

        <script src="{{ asset('js/morrisjs/raphael-min.js')}}"></script>
        <script src="{{ asset('js/morrisjs/morris.js')}}"></script>
        <script src="{{ asset('js/morrisjs/morris-active.js')}}"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{ asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{ asset('js/sparkline/jquery.charts-sparkline.js')}}"></script>
        <script src="{{ asset('js/sparkline/sparkline-active.js')}}"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="{{ asset('js/calendar/moment.min.js')}}"></script>
        <script src="{{ asset('js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{ asset('js/calendar/fullcalendar-active.js')}}"></script>

        
        <!-- plugins JS
            ============================================ -->
        <script src="{{ asset('js/plugins.js')}}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{ asset('js/main.js')}}"></script>
        <!-- tawk chat JS
            ============================================ -->
        <script src="{{ asset('js/tawk-chat.js')}}"></script>

        
</body>
</html>
