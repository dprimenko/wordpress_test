function startTimer(duration, banner) {
                var start = Date.now(),
                    diff,
                    minutes,
                    seconds;
                var counter = 300;
                function timer() {
                    // get the number of seconds that have elapsed since 
                    // startTimer() was called
                    diff = duration - (((Date.now() - start) / 1000) | 0);
            
                    // does the same job as parseInt truncates the float
                    minutes = (diff / 60) | 0;
                    seconds = (diff % 60) | 0;
            
                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;
            
                    counter--;
                    banner.style.transform = "translate3d("+ counter +"px, 0px, 0px)";
            
                    if (diff <= 0) {
                        // add one second so that the count down starts at the full duration
                        // example 05:00 not 04:59
                        start = Date.now() + 1000;
                    }
                };
                // we don't want to wait a full second before the timer starts
                timer();
                setInterval(timer, 70);
            }

        window.onload = function () {
            var duration = 60 * 5;
            var banner = document.querySelector('#banner');
            startTimer(duration, banner);
        };