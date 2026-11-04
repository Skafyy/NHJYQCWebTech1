        const video = document.getElementById('pizzaVideo');
        const muteBtn = document.getElementById('muteBtn');
        const speedBtn = document.getElementById('speedBtn');

        function playVideo() {
            video.play();
        }

        function pauseVideo() {
            video.pause();
        }

        function restartVideo() {
            video.currentTime = 0;
            video.play();
        }

        function toggleMute() {
            if (video.muted) {
                video.muted = false;
                muteBtn.textContent = "Némítás";
            } else {
                video.muted = true;
                muteBtn.textContent = "Hang be";
            }
        }

        function toggleSpeed() {
            if (video.playbackRate === 1.0) {
                video.playbackRate = 0.5;
                speedBtn.textContent = "Sebesség: Nagyon lassú";
            } else if (video.playbackRate === 0.5) {
                video.playbackRate = 1.5;
                speedBtn.textContent = "Sebesség: Gyors";
            } else {
                video.playbackRate = 1.0;
                speedBtn.textContent = "Sebesség: Normál";
            }
        }

        function hasItEnded() {
            if (video) {
                if (video.ended) {
                    alert("Igen, a videó már véget ért!");
                } else {
                    alert("Nem, a videó még fut vagy szünetel.");
                }
            }
        }

        function getCurrentPosition() {
            if(video) {
                alert("Aktuális pozíció: " + video.currentTime.toFixed(1) + " másodperc");
                }
            }
        
        function getDuration() {
            if(video) {
                alert("A videó teljes időtartama: " + video.duration + " másodperc");
            }
        }
        