function startTimer(duration, display) {
    var start = moment();
    var end = moment().add(duration, 'minutes');

    function tick() {
        var diff = end.diff(moment(), 'seconds');
        var duration = moment.duration(diff, 'seconds');

        var minutes = Math.floor(duration.asMinutes());
        var seconds = duration.seconds();

        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;

        display.textContent = minutes + ':' + seconds;

        if (diff <= 0) {
            clearTimeout(timeoutHandle);
            alert('Waktu sudah habis');
            window.location.href = '/';
        } else {
            timeoutHandle = setTimeout(tick, 1000);
        }
    }

    tick();
}
