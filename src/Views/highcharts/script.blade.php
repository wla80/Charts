<script type="text/javascript">
    function {{ $chart->id }}_create(data) {
        {{ $chart->id }}_rendered = true;
        document.getElementById("{{ $chart->id }}_loader").remove();
            window.{{ $chart->id }} = new Highcharts.Chart("{{ $chart->id }}", {
                series: data,
                {!! $chart->formatOptions(false, true) !!}
            });
    }
    @include('charts::init')
</script>
