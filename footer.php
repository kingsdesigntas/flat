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
</footer>
<script>
var curtain = document.querySelector('#curtain-menu');
var curtainContent = document.querySelector('#curtain-menu-container');
var openCurtainButton = document.querySelector('#open-curtain-button');
var closeCurtainButton = document.querySelector('#close-curtain-button');
var lastCurtainLink = document.querySelector('#menu-primary_navigation > li:last-child a:last-of-type');

closeCurtainButton.addEventListener("keydown", function(event) {
    setTimeout(() => {
        if (event.shiftKey && event.keyCode == 9) {
            lastCurtainLink.focus();
        }
    }, 10);
})

lastCurtainLink.addEventListener("keydown", function(event) {
    setTimeout(() => {
        if (event.keyCode == 9 && !event.shiftKey) {
            closeCurtainButton.focus();
        }
    }, 10);
})

function handleCurtainKeydown(event) {
    if (event.key === "Escape") {
        closeCurtain();
        window.removeEventListener("keydown", handleCurtainKeydown);
    }
}

function openCurtain() {
    document.querySelector('html').style.overflow = 'hidden';
    window.addEventListener('keydown', handleCurtainKeydown);
    curtain.style.width = "100vw";
    curtain.style.visibility = "visible";
    setTimeout(() => {
        curtainContent.style.opacity = "1";
        closeCurtainButton.style.opacity = "1";
        closeCurtainButton.focus();
    }, 350);
}

function closeCurtain() {
    document.querySelector('html').style.overflow = 'auto';
    curtainContent.style.opacity = "0";
    closeCurtainButton.style.opacity = "0";
    setTimeout(() => {
        curtain.style.width = "0";
    }, 350);
    setTimeout(() => {

        curtain.style.visibility = "hidden";
        openCurtainButton.focus();
    }, 650);
}
</script>
<?php wp_footer();?>
</body>

</html>