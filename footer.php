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
        <div class="flow" style="--flow: 1rem">
            <p class="font-md" style="font-weight:bold">Put the logo here</p>
        </div>
        <div class="flow" style="--flow: 1rem">
            <p class="font-md" style="font-weight:bold">Footer Menu One</p>
            <nav>
                <?php if (has_nav_menu('footer_one')) {
                     echo wp_nav_menu(['theme_location' => 'footer_one', 'menu_class' => 'nav']);
                }?>
            </nav>
        </div>
        <div class="flow" style="--flow: 1rem">
            <p class="font-md" style="font-weight:bold">Footer Menu Two</p>
            <nav>
                <?php if (has_nav_menu('footer_two')) {
                     echo wp_nav_menu(['theme_location' => 'footer_two', 'menu_class' => 'nav']);
                }?>
            </nav>
        </div>
        <div class="flow" style="--flow: 1rem">
            <p class="font-md" style="font-weight:bold">Column Heading</p>
        </div>
    </div>
</footer>
<script>
var curtain = document.querySelector('#curtain-menu');
var curtainContent = document.querySelector('#curtain-menu-container');
var openCurtainButton = document.querySelector('#open-curtain-button');
var closeCurtainButton = document.querySelector('#close-curtain-button');
var lastCurtainLink = document.querySelector('#menu-primary_navigation > li:last-child a:last-of-type');
console.log(lastCurtainLink);

closeCurtainButton.addEventListener("keydown", function(event) {
    setTimeout(() => {
        if (event.shiftKey && event.keyCode == 9) {
            lastCurtainLink.focus();
            console.log("I should focus the last link");
        }
    }, 110);
})

lastCurtainLink.addEventListener("keydown", function(event) {
    setTimeout(() => {
        if (!event.shiftKey && event.keyCode == 9) {
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