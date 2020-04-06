
      var leftgear = document.getElementById("logo");
      var rightgear = document.getElementById("bglogo");

        window.addEventListener("scroll", function() {
            leftgear.style.transform = "rotate("+0.9*window.pageYOffset+"deg)";
            rightgear.style.transform = "rotate("+0.03*window.pageYOffset+"deg)";
        });
      ;(function() {
        var throttle = function(type, name, obj) {
            var obj = obj || window;
            var running = false;
            var func = function() {
                if (running) { return; }
                running = true;
                requestAnimationFrame(function() {
                    obj.dispatchEvent(new CustomEvent(name));
                    running = false;
                });
            };
            obj.addEventListener(type, func);
        };
        throttle ("scroll", "optimizedScroll");
    })();
