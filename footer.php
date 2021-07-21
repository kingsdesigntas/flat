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
        el.addEventListener("mouseover", function(event) {
            this.setAttribute('aria-expanded', "true");
            clearTimeout(timer);
        });
        el.addEventListener("mouseout", function(event) {
            timer = setTimeout(function(event) {
                document.querySelector(".has-submenu.open").className = "has-submenu";
            }, 1000);
        });
        el.querySelector('a').addEventListener("click", function(event) {
            if (this.getAttribute('aria-expanded') == "false") {
                this.setAttribute('aria-expanded', "true");
                this.parentNode.querySelector('ul').querySelector('li').querySelector('a')
                    .focus();
                window.setTimeout(() => {
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
</footer>
<?php wp_footer();?>
</body>

</html>