<script type="text/javascript" charset="utf-8">
    jQuery(document).ready(function() {
        $('#start').qtip({
            content: 'Click to listen to the reading.',
            position: {
                my: 'top left',
                target: 'mouse',
                show: { ready: true },
                viewport: $(window),
                adjust: { x: 10, y: 10 }
            },
            hide: { fixed: true },
            style: 'ui-tooltip-shadow'
        });

        $('#start-test').qtip({
            content: 'Click! Then read it for a reading test.',
            position: {
                my: 'top left',
                target: 'mouse',
                show: { ready: true },
                viewport: $(window),
                adjust: { x: 10, y: 10 }
            },
            hide: { fixed: true },
            style: 'ui-tooltip-shadow'
        });
        
        $('#index-btn').qtip({
            content: 'Back to English Phrase Matcher.',
            position: {
                my: 'top left',
                target: 'mouse',
                show: { ready: true },
                viewport: $(window),
                adjust: { x: 10, y: 10 }
            },
            hide: { fixed: true },
            style: 'ui-tooltip-shadow'
        });
    });
</script>
