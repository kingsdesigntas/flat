<?php
/**
 * Footer
 *
 * 
 * 
 */

?>
</div> <!-- #page ends -->
<footer class="theme-footer">
    <div class="footer-content">
        <h3>I'm the footer</h3>
    </div>
    <script defer>
    var menuItems = document.querySelectorAll('.menu-item-has-children');
    Array.prototype.forEach.call(menuItems, function(el, i) {
        el.querySelector('a').setAttribute('aria-haspopup', "true");
        el.querySelector('a').setAttribute('aria-expanded', "false");
        el.querySelector('a').addEventListener("click", function(event) {
            if (this.getAttribute('aria-expanded') == "false") {
                this.setAttribute('aria-expanded', "true");
                this.parentNode.querySelector('ul').firstElementChild.style.background = "hotpink";
                this.parentNode.querySelector('ul').querySelector('li').querySelector('a')
                    .focus();
                this.setTimeout(() => {
                    this.parentNode.querySelector('ul').querySelector('li').querySelector('a')
                        .focus();
                }, 500);

            } else {
                this.setAttribute('aria-expanded', "false");
            }
            event.preventDefault();
            return false;
        });
    });
    </script>
    <!-- <script defer>
    var menuItems = document.querySelectorAll('.menu-item-has-children');
    console.log(menuItems);
    Array.prototype.forEach.call(menuItems, function(el, i) {
        console.log("I'm running");
        console.log(el);
        el.querySelector('a').addEventListener("click", function(event) {
            if (this.parentNode.className == "menu-item-has-children") {
                console.log("I found one!");
                this.parentNode.className = "menu-item-has-children open";
                this.setAttribute('aria-expanded', "true");
            } else {
                console.log("I found nothing, sad time");
                this.parentNode.className = "menu-item-has-children";
                this.setAttribute('aria-expanded', "false");
            }
            event.preventDefault();
            return false;
        });
    });
    </script> -->
</footer>
<?php wp_footer();?>
</body>

</html>